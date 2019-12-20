<?php

require_once '../vendor/autoload.php';

use Cybersai\Ussd\Templates\TemplateListView;
use Cybersai\Ussd\Templates\TemplateView;
use Cybersai\Ussd\Templates\TemplateViewGroup;
use Cybersai\Ussd\Templates\TemplateViewValidator;
use Cybersai\Ussd\Styles\NormalTitleWithFooterView;
use Cybersai\Ussd\Styles\CompactSubTitleWithSubFooterListView;
use Cybersai\Ussd\Modifiers\RomanNumericLowerCaseNumbering;
use Cybersai\Ussd\Modifiers\ListSeparatorLineBreak;
use Cybersai\Ussd\Modifiers\NumberingSeparatorBracketPlusSpace;
use Cybersai\Ussd\Modifiers\StringArrayList;

class FirstView extends TemplateListView
{
    use NormalTitleWithFooterView;
    use CompactSubTitleWithSubFooterListView;
    use RomanNumericLowerCaseNumbering;
    use ListSeparatorLineBreak;
    use NumberingSeparatorBracketPlusSpace;
    use StringArrayList;

    public function __construct($request)
    {
        parent::__construct($request);

        $this->title = 'Isaac Sai';
        $this->content = ['One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight'];
        $this->page = $request->getPage();
        $this->number_per_page = 3;
        $this->sub_title = 'Jum Bernard';
        $this->sub_footer = 'Benjamin Perch';
        $this->footer = 'This is the end';
        $this->next = SecondView::class; 
    }
}

class SecondView extends TemplateView
{
    use NormalTitleWithFooterView;

    public function __construct($request)
    {
        parent::__construct($request);

        $this->title = 'Isaac Sai';
        $this->content = 'Amazing Grace';
        $this->footer = 'This is the end';
        $this->next = ViewValidator::class;
    }
}



class ViewValidator extends TemplateViewValidator
{
    public function __construct($request)
    {
        $this->views = [new FirstView($request), new SecondView($request)];
        parent::__construct($request);
    }

    function getValidView()
    {
        $validation = $this->request->getUserInput();
        return $this->views[$validation - 1];
    }
}

class ViewGroup extends TemplateViewGroup
{
    public function __construct($request)
    {
        $this->views = [new FirstView($request), new SecondView($request)];
        parent::__construct($request);
    }

    function getSelectedView()
    {
        $selection = $this->request->getUserInput();
        return $this->views[$selection - 1];
    }
}

?>

<?php

    use Cybersai\Ussd\Exceptions\ViewNotFoundException;
    use Cybersai\Ussd\Adapters\KorbaRequestAdapter;
    use Cybersai\Ussd\Router\UssdRouterConfig;
    use Cybersai\Ussd\Router\UssdRouter;
    use Cybersai\Ussd\Constants\Korba;
    
    # Create new request
    $request = new KorbaRequestAdapter([
        Korba::session_id => '1',
        Korba::MSISDN => '233545112466',
        Korba::network => 'MTN',
        Korba::user_input => '*395'
    ]);

    # Show first view
    $first_view = new FirstView($request);

    # Show second view
    $second_view = new SecondView($request);

    # Create snapshot of the request and save it
    $snap = $request->snapshotHistory();

    # Display view to user
    echo $second_view->parseToString() . "\n\n\n\n\n\n\n";

    # Find snapshot from the saved location and restore the view
    $restore = KorbaRequestAdapter::createFromSnapshot($snap);

    # Create new router
    $router = new UssdRouter($restore, new UssdRouterConfig());

    # Set new UserInput
    $router->acceptUserInput('2');

    # Get next view
    try
    {
        $outcome = $router->route();
        # Save snapshot
        $snap = $restore->snapshotHistory();
        # Display view to user
        $response = $restore->respondToProvider($outcome);

        print_r($response);
    }
    catch (ViewNotFoundException $e)
    {
        echo $e->getMessage();
    }
?>
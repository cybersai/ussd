<?php

    require_once '../vendor/autoload.php';

    class MyView extends \Cybersai\USSD\Templates\TemplateListView {
        use \Cybersai\USSD\Styles\NormalTitleWithFooterView, \Cybersai\USSD\Modifiers\RomanNumericLowerCaseNumbering,
            \Cybersai\USSD\Modifiers\ListSeparatorLineBreak, \Cybersai\USSD\Styles\CompactSubTitleWithSubFooterListView,
            \Cybersai\USSD\Modifiers\NumberingSeparatorBracketPlusSpace, \Cybersai\USSD\Modifiers\StringArrayList;
        public function __construct($request)
        {
            $this->title = 'Isaac Sai';
            $this->content = ['One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight'];
            $this->page = $request->getPage();
            $this->number_per_page = 3;
            $this->sub_title = 'Jum Bernard';
            $this->sub_footer = 'Benjamin Perch';
            $this->footer = 'This is the end';
            $this->next = MyView2::class;
            parent::__construct($request);
        }
    }

class MyView2 extends \Cybersai\USSD\Templates\TemplateView {
    use \Cybersai\USSD\Styles\NormalTitleWithFooterView;
    public function __construct($request)
    {
        $this->title = 'Isaac Sai';
        $this->content = 'Amazing Grace';
        $this->footer = 'This is the end';
        $this->next = MyViewValidator::class;
//        $this->next = MyView::class;
        parent::__construct($request);
    }
}

class MyViewGroup extends \Cybersai\USSD\Templates\TemplateViewGroup {
        public function __construct($request)
        {
            $this->views = [new MyView($request), new MyView2($request)];
            parent::__construct($request);
        }

    function getSelectedView()
    {
        $selection = $this->request->getUserInput();
        return $this->views[$selection - 1];
    }

}

class MyViewValidator extends \Cybersai\USSD\Templates\TemplateViewValidator {
        public function __construct($request)
        {
            $this->views = [new MyView($request), new MyView2($request)];
            parent::__construct($request);
        }

    function getValidView()
    {
        $validation = $this->request->getUserInput();
        return $this->views[$validation - 1];
    }

}
?>

<?php

    use \Cybersai\USSD\Adapters\KorbaRequestAdapter;
    use \Cybersai\USSD\Router\USSDRouterConfig;
    use \Cybersai\USSD\Router\USSDRouter;
    use \Cybersai\USSD\Constants\Korba;
    use \Cybersai\USSD\Exceptions\ViewNotFoundException;

    # Create a new request
    $request = new KorbaRequestAdapter([
        Korba::session_id => '1',
        Korba::MSISDN => '233545112466',
        Korba::network => 'MTN',
        Korba::user_input => '*395'
    ]);

    # Show default view
    $view_id = new MyView($request);

    # Show second view
    $view_pin = new MyView2($request);

    # Create Snapshot and save somewhere
    $snap = $request->snapshotHistory();

    # Display view to user
    echo $view_pin->parseToString();
    echo "\n\n\n\n\n\n\n";
    # ELSE
    # find Snapshot from saved location
    # restore view from snap shot
    $restore = KorbaRequestAdapter::createFromSnapshot($snap);
//    $restore = USSDRequest::createFromSnapshot($snap);
    # Create a router
    $router = new USSDRouter($restore, new USSDRouterConfig());
    # Set new UserInput
    $router->acceptUserInput('2');
    # Get next view
    try {
        $outcome = $router->route();
        # Save snap back to somewhere
        $snap = $restore->snapshotHistory();
        #display view to user
        $response = $restore->respondToProvider($outcome);
        print_r($response);
        # END IF
    } catch (ViewNotFoundException $e) {
        # Return Invalid input
    }

?>
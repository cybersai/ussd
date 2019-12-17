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
    # IF
    # create new request if sesssion id not found
    $request =  new \Cybersai\USSD\Adapters\KorbaRequestAdapter([\Cybersai\USSD\Constants\Korba::session_id => '1',
        \Cybersai\USSD\Constants\Korba::MSISDN => '233545112466',
        \Cybersai\USSD\Constants\Korba::network => 'MTN',
        \Cybersai\USSD\Constants\Korba::user_input => '*395']);
//    $request = new \Cybersai\USSD\Requests\USSDRequest('1','+233545112466', 'MTN', '*395#');
    # Default/First View
    $view_id = new MyView($request);

    $view_pin = new MyView2($request);

    # Create Snapshot and save somewhere
    $snap = $request->snapshotHistory();
    # Display view to user
    echo $view_pin->parseToString();
    echo "\n\n\n\n\n\n\n";
    # ELSE
    # find Snapshot from saved location
    # restore view from snap shot
    $restore = \Cybersai\USSD\Adapters\KorbaRequestAdapter::createFromSnapshot($snap);
//    $restore = \Cybersai\USSD\Requests\USSDRequest::createFromSnapshot($snap);
    # Create a router
    $router = new \Cybersai\USSD\Router\USSDRouter($restore, new \Cybersai\USSD\Router\USSDRouterConfig());
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
    } catch (\Cybersai\USSD\Exceptions\ViewNotFound $e) {
        # Return Invalid input
    }

?>
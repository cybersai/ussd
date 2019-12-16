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
        $this->next = MyView::class;
        parent::__construct($request);
    }
}

class MyViewGroup extends \Cybersai\USSD\Templates\TemplateViewGroup {
        public function __construct()
        {
            $this->views = [new MyView, new MyView2];
        }

    function getViewForSelection($selection)
    {
        return $this->views[$selection - 1];
    }

}
?>

<?php
    # IF
    # create new request if sesssion id not found
    $request = new \Cybersai\USSD\Requests\USSDRequest('1','+233545112466', 'MTN', '*395#');
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
    $restore = \Cybersai\USSD\Requests\USSDRequest::createFromSnapshot($snap);
    # Create a router
    $router = new \Cybersai\USSD\Router\USSDRouter($restore, new \Cybersai\USSD\Router\USSDRouterConfig(
        ['#' => [MyView::class, MyView2::class]],
        ['0' => 'all'],
        ['00' => 'all'],
        ['99' => 'all']));
    # Set new UserInput
    $router->acceptUserInput('2');
    # Get next view
    $outcome = $router->route();
    # Save snap back to somewhere
    $snap = $restore->snapshotHistory();
    #display view to user
    echo $outcome->parseToString();
    # END IF
?>
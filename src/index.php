<?php
    require_once '../vendor/autoload.php';
    class MyView extends \Cybersai\USSD\Templates\TemplateListView {
        use \Cybersai\USSD\Styles\NormalTitleWithFooterView, \Cybersai\USSD\Modifiers\RomanNumericLowerCaseNumbering,
            \Cybersai\USSD\Modifiers\ListSeparatorLineBreak, \Cybersai\USSD\Styles\CompactSubTitleWithSubFooterListView,
            \Cybersai\USSD\Modifiers\NumberingSeparatorBracketPlusSpace, \Cybersai\USSD\Modifiers\StringArrayList;
        public function __construct()
        {
            $this->title = 'Isaac Sai';
            $this->content = ['One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight'];
            $this->page = 1;
            $this->number_per_page = 3;
            $this->sub_title = 'Jum Bernard';
            $this->sub_footer = 'Benjamin Perch';
            $this->footer = 'This is the end';
            $this->next = 'Togo';
        }
    }

class MyView2 extends \Cybersai\USSD\Templates\TemplateView {
    use \Cybersai\USSD\Styles\NormalTitleWithFooterView;
    public function __construct()
    {
        $this->title = 'Isaac Sai';
        $this->content = 'Amazing Grace';
        $this->footer = 'This is the end';
        $this->next = 'Togo';
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
    $view = new MyView;
    $view2 = new MyView2;
    $view_group = new MyViewGroup;
?>
<pre style="margin-left: 20px; border: 1px solid black">
    <code>
<?=$view->parseToString()?>
<?="\n"?>
<?=$view->getNext()?>
    </code>
</pre>

<pre><?=$view_group->getViewForSelection(2)->parseToString()?></pre>
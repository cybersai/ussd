<?php
    require_once '../vendor/autoload.php';
    class MyView extends \Cybersai\USSD\TemplateListView {
        use \Cybersai\USSD\Styles\NormalTitleWithFooterView, \Cybersai\USSD\Styles\AlphabeticLowerCaseNumbering,
            \Cybersai\USSD\Styles\LineBreakListView, \Cybersai\USSD\Styles\NormalSubTitleWithSubFooterListView,
            \Cybersai\USSD\Modifiers\NumberingSeparatorDot, \Cybersai\USSD\Styles\StringArrayList;
        public function __construct()
        {
            $this->title = 'Isaac Sai';
            $this->content = ['One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight'];
            $this->page = 1;
            $this->number_per_page = 3;
            $this->sub_title = 'Kwame Bernard';
            $this->sub_footer = 'Benjamin Kofi';
            $this->footer = 'This is the end';
            $this->next = 'Togo';
        }
    }
    $view = new MyView;
?>
<pre style="margin-left: 20px">
    <code>
<?=$view->parseToString()?>
<?="\n"?>
<?=$view->getNext()?>
    </code>
</pre>
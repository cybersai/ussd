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
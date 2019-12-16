<?php
    require_once '../vendor/autoload.php';
    class MyView extends \Cybersai\USSD\TemplateListView {
        use \Cybersai\USSD\Styles\NormalTitledView;
        public function __construct()
        {
            $this->title = 'Isaac Sai';
            $this->content = ['One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight'];
//            $this->footer = 'This is the end';
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
<?php
    require_once '../vendor/autoload.php';
    $view = new \Cybersai\USSD\SimpleView('Hello World Is the main event','Ghana');
    class MyView extends \Cybersai\USSD\TitledView {
        use \Cybersai\USSD\Styles\NormalTitledWithFooterView;
        public function __construct()
        {
            $title = 'Isaac Sai';
            $content = 'This is amazing right';
            $footer = 'This is the end';
            $next = 'Togo';
            parent::__construct($next, $title, $content,$footer);
        }
    }
    $view = new MyView;
//    $view = new \Cybersai\USSD\TitledView('Ghana most beautiful','Hello World Is the main event','Ghana');
//    $view = new \Cybersai\USSD\SimpleListView('Ghana most beautiful',2,3, ['One', 'Two',
//        'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight'], 'Ghana');
?>
<pre style="margin-left: 20px">
    <code>
<?=$view->parseToString()?>
<?="\n"?>
<?=$view->getNext()?>
    </code>
</pre>
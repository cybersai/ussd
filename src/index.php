<?php
    require_once '../vendor/autoload.php';
    $view = new \Cybersai\USSD\SimpleView('Hello World Is the main event','Ghana');
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
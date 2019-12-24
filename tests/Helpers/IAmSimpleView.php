<?php


namespace Cybersai\Tests\Helpers;


use Cybersai\Ussd\Styles\SimpleSingleView;
use Cybersai\Ussd\Templates\TemplateView;

class IAmSimpleView extends TemplateView
{
    use SimpleSingleView;
    public function __construct($request)
    {
        $this->content = 'I am Simple';
        parent::__construct($request);
    }
}
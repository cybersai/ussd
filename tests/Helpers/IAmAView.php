<?php


namespace Cybersai\Tests\Helpers;


use Cybersai\Ussd\Styles\SimpleSingleView;
use Cybersai\Ussd\Templates\TemplateView;

class IAmAView extends TemplateView
{
    use SimpleSingleView;

    function setNext($next)
    {
        $this->next = $next;
        return $this;
    }

    function setContent($content)
    {
        $this->content = $content;
        return $this;
    }
}
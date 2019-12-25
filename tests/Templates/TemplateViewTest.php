<?php

namespace Cybersai\Tests\Templates;

use Cybersai\Ussd\Templates\TemplateView;
use PHPUnit\Framework\TestCase;

class TemplateViewTest extends TestCase
{
    /** @test */
    function it_calls_the_necessary_function_when_parsing_view_to_string()
    {
        $view = $this->prophesize(TemplateView::class)->willBeConstructedWith([]);
        $view->reveal()->parseToString();
        $view->getSectionSeparatorOne()->shouldBeCalled();
        $view->getSectionSeparatorTwo()->shouldBeCalled();
    }
}

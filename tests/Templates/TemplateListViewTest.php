<?php

namespace Cybersai\Tests\Templates;

use Cybersai\Ussd\Modifiers\AlphabeticLowerCaseNumbering;
use Cybersai\Ussd\Modifiers\ListSeparatorLineBreak;
use Cybersai\Ussd\Modifiers\NumberingSeparatorDotPlusSpace;
use Cybersai\Ussd\Modifiers\StringArrayList;
use Cybersai\Ussd\Styles\NormalTitleView;
use Cybersai\Ussd\Styles\NoSubTitleAndSubFooterListView;
use Cybersai\Ussd\Templates\TemplateListView;
use PHPUnit\Framework\TestCase;

class TemplateListViewTest extends TestCase
{
    /** @test */
    function it_calls_the_necessary_function_when_parsing_list_view_to_string()
    {
        $view = $this->prophesize(TemplateListView::class)->willBeConstructedWith([]);
        $view->reveal()->parseToString();
        $view->getSubTitleSeparator()->shouldBeCalled();
        $view->getSubFooterSeparator()->shouldBeCalled();
    }

}

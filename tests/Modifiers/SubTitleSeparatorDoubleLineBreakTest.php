<?php


namespace Cybersai\Tests\Modifiers;


use Cybersai\Ussd\Constants\Separator;
use Cybersai\Ussd\Modifiers\SubTitleSeparatorDoubleLineBreak;
use PHPUnit\Framework\TestCase;

class SubTitleSeparatorDoubleLineBreakTest extends TestCase
{
    /** @test */
    function it_returns_the_correct_sub_title_separator()
    {
        $modifier = new class { use SubTitleSeparatorDoubleLineBreak; };
        $this->assertEquals(Separator::DOUBLE_LINE_BREAK, $modifier->getSubTitleSeparator());
    }
}
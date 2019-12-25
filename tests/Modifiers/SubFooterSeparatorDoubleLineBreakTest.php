<?php


namespace Cybersai\Tests\Modifiers;


use Cybersai\Ussd\Constants\Separator;
use Cybersai\Ussd\Modifiers\SubFooterSeparatorDoubleLineBreak;
use PHPUnit\Framework\TestCase;

class SubFooterSeparatorDoubleLineBreakTest extends TestCase
{
    /** @test */
    function it_returns_the_correct_sub_footer_separator()
    {
        $modifier = new class { use SubFooterSeparatorDoubleLineBreak; };
        $this->assertEquals(Separator::DOUBLE_LINE_BREAK, $modifier->getSubFooterSeparator());
    }
}
<?php


namespace Cybersai\Tests\Modifiers;


use Cybersai\Ussd\Constants\Separator;
use Cybersai\Ussd\Modifiers\SubFooterSeparatorLineBreak;
use PHPUnit\Framework\TestCase;

class SubFooterSeparatorLineBreakTest extends TestCase
{
    /** @test */
    function it_returns_the_correct_sub_footer_separator()
    {
        $modifier = new class { use SubFooterSeparatorLineBreak; };
        $this->assertEquals(Separator::LINE_BREAK, $modifier->getSubFooterSeparator());
    }
}
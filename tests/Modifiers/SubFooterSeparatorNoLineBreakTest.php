<?php


namespace Cybersai\Tests\Modifiers;


use Cybersai\Ussd\Constants\Separator;
use Cybersai\Ussd\Modifiers\SubFooterSeparatorNoLineBreak;
use PHPUnit\Framework\TestCase;

class SubFooterSeparatorNoLineBreakTest extends TestCase
{
    /** @test */
    function it_returns_the_correct_sub_footer_separator()
    {
        $modifier = new class { use SubFooterSeparatorNoLineBreak; };
        $this->assertEquals(Separator::NO_LINE_BREAK, $modifier->getSubFooterSeparator());
    }
}
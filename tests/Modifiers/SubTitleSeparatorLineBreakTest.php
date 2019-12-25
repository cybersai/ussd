<?php


namespace Cybersai\Tests\Modifiers;


use Cybersai\Ussd\Constants\Separator;
use Cybersai\Ussd\Modifiers\SubTitleSeparatorLineBreak;
use PHPUnit\Framework\TestCase;

class SubTitleSeparatorLineBreakTest extends TestCase
{
    /** @test */
    function it_returns_the_correct_sub_title_separator()
    {
        $modifier = new class { use SubTitleSeparatorLineBreak; };
        $this->assertEquals(Separator::LINE_BREAK, $modifier->getSubTitleSeparator());
    }
}
<?php


namespace Cybersai\Tests\Modifiers;


use Cybersai\Ussd\Constants\Separator;
use Cybersai\Ussd\Modifiers\SectionSeparatorTwoDoubleLineBreak;
use PHPUnit\Framework\TestCase;

class SectionSeparatorTwoDoubleLineBreakTest extends TestCase
{
    /** @test */
    function it_returns_the_correct_section_two_separator()
    {
        $modifier = new class { use SectionSeparatorTwoDoubleLineBreak; };
        $this->assertEquals(Separator::DOUBLE_LINE_BREAK, $modifier->getSectionSeparatorTwo());
    }
}
<?php


namespace Cybersai\Tests\Modifiers;


use Cybersai\Ussd\Constants\Separator;
use Cybersai\Ussd\Modifiers\SectionSeparatorOneDoubleLineBreak;
use PHPUnit\Framework\TestCase;

class SectionSeparatorOneDoubleLineBreakTest extends TestCase
{
    /** @test */
    function it_returns_the_correct_section_one_separator()
    {
        $modifier = new class { use SectionSeparatorOneDoubleLineBreak; };
        $this->assertEquals(Separator::DOUBLE_LINE_BREAK, $modifier->getSectionSeparatorOne());
    }
}
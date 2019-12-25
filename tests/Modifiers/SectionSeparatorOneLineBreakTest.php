<?php


namespace Cybersai\Tests\Modifiers;


use Cybersai\Ussd\Constants\Separator;
use Cybersai\Ussd\Modifiers\SectionSeparatorOneLineBreak;
use PHPUnit\Framework\TestCase;

class SectionSeparatorOneLineBreakTest extends TestCase
{
    /** @test */
    function it_returns_the_correct_section_one_separator()
    {
        $modifier = new class { use SectionSeparatorOneLineBreak; };
        $this->assertEquals(Separator::LINE_BREAK, $modifier->getSectionSeparatorOne());
    }
}
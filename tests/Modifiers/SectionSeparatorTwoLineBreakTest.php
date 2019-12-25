<?php


namespace Cybersai\Tests\Modifiers;


use Cybersai\Ussd\Constants\Separator;
use Cybersai\Ussd\Modifiers\SectionSeparatorTwoLineBreak;
use PHPUnit\Framework\TestCase;

class SectionSeparatorTwoLineBreakTest extends TestCase
{
    /** @test */
    function it_returns_the_correct_section_two_separator()
    {
        $modifier = new class { use SectionSeparatorTwoLineBreak; };
        $this->assertEquals(Separator::LINE_BREAK, $modifier->getSectionSeparatorTwo());
    }
}
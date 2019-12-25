<?php


namespace Cybersai\Tests\Modifiers;


use Cybersai\Ussd\Constants\Separator;
use Cybersai\Ussd\Modifiers\SectionSeparatorTwoNoLineBreak;
use PHPUnit\Framework\TestCase;

class SectionSeparatorTwoNoLineBreakTest extends TestCase
{
    /** @test */
    function it_returns_the_correct_section_two_separator()
    {
        $modifier = new class { use SectionSeparatorTwoNoLineBreak; };
        $this->assertEquals(Separator::NO_LINE_BREAK, $modifier->getSectionSeparatorTwo());
    }
}
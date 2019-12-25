<?php


namespace Cybersai\Tests\Modifiers;


use Cybersai\Ussd\Constants\Separator;
use Cybersai\Ussd\Modifiers\SectionSeparatorOneNoLineBreak;
use PHPUnit\Framework\TestCase;

class SectionSeparatorOneNoLineBreakTest extends TestCase
{
    /** @test */
    function it_returns_the_correct_section_one_separator()
    {
        $modifier = new class { use SectionSeparatorOneNoLineBreak; };
        $this->assertEquals(Separator::NO_LINE_BREAK, $modifier->getSectionSeparatorOne());
    }
}
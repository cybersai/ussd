<?php


namespace Cybersai\Tests\Modifiers;


use Cybersai\Ussd\Constants\Separator;
use Cybersai\Ussd\Modifiers\SubTitleSeparatorNoLineBreak;
use PHPUnit\Framework\TestCase;

class SubTitleSeparatorNoLineBreakTest extends TestCase
{
    /** @test */
    function it_returns_the_correct_sub_title_separator()
    {
        $modifier = new class { use SubTitleSeparatorNoLineBreak; };
        $this->assertEquals(Separator::NO_LINE_BREAK, $modifier->getSubTitleSeparator());
    }
}
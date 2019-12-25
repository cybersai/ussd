<?php


namespace Cybersai\Tests\Modifiers;


use Cybersai\Ussd\Constants\Separator;
use Cybersai\Ussd\Modifiers\ListSeparatorDoubleLineBreak;
use PHPUnit\Framework\TestCase;

class ListSeparatorDoubleLineBreakTest extends TestCase
{
    /** @test */
    function it_returns_the_correct_list_separator()
    {
        $modifier = new class { use ListSeparatorDoubleLineBreak; };
        $this->assertEquals(Separator::DOUBLE_LINE_BREAK, $modifier->getListSeparator());
    }
}
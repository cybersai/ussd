<?php


namespace Cybersai\Tests\Modifiers;


use Cybersai\Ussd\Constants\Separator;
use Cybersai\Ussd\Modifiers\ListSeparatorLineBreak;
use PHPUnit\Framework\TestCase;

class ListSeparatorLineBreakTest extends TestCase
{
    /** @test */
    function it_returns_the_correct_list_separator()
    {
        $modifier = new class { use ListSeparatorLineBreak; };
        $this->assertEquals(Separator::LINE_BREAK, $modifier->getListSeparator());
    }
}
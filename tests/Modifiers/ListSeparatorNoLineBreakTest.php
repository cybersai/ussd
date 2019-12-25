<?php


namespace Cybersai\Tests\Modifiers;


use Cybersai\Ussd\Constants\Separator;
use Cybersai\Ussd\Modifiers\ListSeparatorNoLineBreak;
use PHPUnit\Framework\TestCase;

class ListSeparatorNoLineBreakTest extends TestCase
{
    /** @test */
    function it_returns_the_correct_list_separator()
    {
        $modifier = new class { use ListSeparatorNoLineBreak; };
        $this->assertEquals(Separator::NO_LINE_BREAK, $modifier->getListSeparator());
    }
}
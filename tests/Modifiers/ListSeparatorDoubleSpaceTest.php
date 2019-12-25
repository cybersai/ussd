<?php


namespace Cybersai\Tests\Modifiers;


use Cybersai\Ussd\Constants\Separator;
use Cybersai\Ussd\Modifiers\ListSeparatorDoubleSpace;
use PHPUnit\Framework\TestCase;

class ListSeparatorDoubleSpaceTest extends TestCase
{
    /** @test */
    function it_returns_the_correct_list_separator()
    {
        $modifier = new class { use ListSeparatorDoubleSpace; };
        $this->assertEquals(Separator::DOUBLE_SPACE, $modifier->getListSeparator());
    }
}
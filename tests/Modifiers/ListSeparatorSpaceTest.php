<?php


namespace Cybersai\Tests\Modifiers;


use Cybersai\Ussd\Constants\Separator;
use Cybersai\Ussd\Modifiers\ListSeparatorSpace;
use PHPUnit\Framework\TestCase;

class ListSeparatorSpaceTest extends TestCase
{
    /** @test */
    function it_returns_the_correct_list_separator()
    {
        $modifier = new class { use ListSeparatorSpace; };
        $this->assertEquals(Separator::SPACE, $modifier->getListSeparator());
    }
}
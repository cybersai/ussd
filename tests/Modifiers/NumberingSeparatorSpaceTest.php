<?php


namespace Cybersai\Tests\Modifiers;


use Cybersai\Ussd\Constants\Separator;
use Cybersai\Ussd\Modifiers\NumberingSeparatorSpace;
use PHPUnit\Framework\TestCase;

class NumberingSeparatorSpaceTest extends TestCase
{
    /** @test */
    function it_returns_the_correct_numbering_separator()
    {
        $modifier = new class { use NumberingSeparatorSpace; };
        $this->assertEquals(Separator::SPACE, $modifier->getNumberingSeparator());
    }
}
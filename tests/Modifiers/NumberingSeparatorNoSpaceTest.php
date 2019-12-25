<?php


namespace Cybersai\Tests\Modifiers;


use Cybersai\Ussd\Constants\Separator;
use Cybersai\Ussd\Modifiers\NumberingSeparatorNoSpace;
use PHPUnit\Framework\TestCase;

class NumberingSeparatorNoSpaceTest extends TestCase
{
    /** @test */
    function it_returns_the_correct_numbering_separator()
    {
        $modifier = new class { use NumberingSeparatorNoSpace; };
        $this->assertEquals(Separator::NO_SPACE, $modifier->getNumberingSeparator());
    }
}
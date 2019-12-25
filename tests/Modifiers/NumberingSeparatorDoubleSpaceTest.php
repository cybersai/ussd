<?php


namespace Cybersai\Tests\Modifiers;


use Cybersai\Ussd\Constants\Separator;
use Cybersai\Ussd\Modifiers\NumberingSeparatorDoubleSpace;
use PHPUnit\Framework\TestCase;

class NumberingSeparatorDoubleSpaceTest extends TestCase
{
    /** @test */
    function it_returns_the_correct_numbering_separator()
    {
        $modifier = new class { use NumberingSeparatorDoubleSpace; };
        $this->assertEquals(Separator::DOUBLE_SPACE, $modifier->getNumberingSeparator());
    }
}
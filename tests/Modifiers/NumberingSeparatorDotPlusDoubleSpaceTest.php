<?php


namespace Cybersai\Tests\Modifiers;


use Cybersai\Ussd\Constants\Separator;
use Cybersai\Ussd\Modifiers\NumberingSeparatorDotPlusDoubleSpace;
use PHPUnit\Framework\TestCase;

class NumberingSeparatorDotPlusDoubleSpaceTest extends TestCase
{
    /** @test */
    function it_returns_the_correct_numbering_separator()
    {
        $modifier = new class { use NumberingSeparatorDotPlusDoubleSpace; };
        $this->assertEquals(Separator::DOT_PLUS_DOUBLE_SPACE, $modifier->getNumberingSeparator());
    }
}
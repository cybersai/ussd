<?php


namespace Cybersai\Tests\Modifiers;


use Cybersai\Ussd\Constants\Separator;
use Cybersai\Ussd\Modifiers\NumberingSeparatorBracketPlusDoubleSpace;
use PHPUnit\Framework\TestCase;

class NumberingSeparatorBracketPlusDoubleSpaceTest extends TestCase
{
    /** @test */
    function it_returns_the_correct_numbering_separator()
    {
        $modifier = new class { use NumberingSeparatorBracketPlusDoubleSpace; };
        $this->assertEquals(Separator::BRACKET_PLUS_DOUBLE_SPACE, $modifier->getNumberingSeparator());
    }
}
<?php


namespace Cybersai\Tests\Modifiers;


use Cybersai\Ussd\Constants\Separator;
use Cybersai\Ussd\Modifiers\NumberingSeparatorBracketPlusSpace;
use PHPUnit\Framework\TestCase;

class NumberingSeparatorBracketPlusSpaceTest extends TestCase
{
    /** @test */
    function it_returns_the_correct_numbering_separator()
    {
        $modifier = new class { use NumberingSeparatorBracketPlusSpace; };
        $this->assertEquals(Separator::BRACKET_PLUS_SPACE, $modifier->getNumberingSeparator());
    }
}
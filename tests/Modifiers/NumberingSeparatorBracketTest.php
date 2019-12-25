<?php


namespace Cybersai\Tests\Modifiers;


use Cybersai\Ussd\Constants\Separator;
use Cybersai\Ussd\Modifiers\NumberingSeparatorBracket;
use PHPUnit\Framework\TestCase;

class NumberingSeparatorBracketTest extends TestCase
{
    /** @test */
    function it_returns_the_correct_numbering_separator()
    {
        $modifier = new class { use NumberingSeparatorBracket; };
        $this->assertEquals(Separator::BRACKET, $modifier->getNumberingSeparator());
    }
}
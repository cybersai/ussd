<?php


namespace Cybersai\Tests\Modifiers;


use Cybersai\Ussd\Constants\Separator;
use Cybersai\Ussd\Modifiers\NumberingSeparatorDot;
use PHPUnit\Framework\TestCase;

class NumberingSeparatorDotTest extends TestCase
{
    /** @test */
    function it_returns_the_correct_numbering_separator()
    {
        $modifier = new class { use NumberingSeparatorDot; };
        $this->assertEquals(Separator::DOT, $modifier->getNumberingSeparator());
    }
}
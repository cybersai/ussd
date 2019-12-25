<?php


namespace Cybersai\Tests\Modifiers;


use Cybersai\Ussd\Constants\Separator;
use Cybersai\Ussd\Modifiers\NumberingSeparatorDotPlusSpace;
use PHPUnit\Framework\TestCase;

class NumberingSeparatorDotPlusSpaceTest extends TestCase
{
    /** @test */
    function it_returns_the_correct_numbering_separator()
    {
        $modifier = new class { use NumberingSeparatorDotPlusSpace; };
        $this->assertEquals(Separator::DOT_PLUS_SPACE, $modifier->getNumberingSeparator());
    }
}
<?php

namespace Cybersai\Tests\Constants;

use Cybersai\Ussd\Constants\Separator;
use PHPUnit\Framework\TestCase;

class SeparatorTest extends TestCase
{
    /** @test */
    function it_returns_the_correct_no_line_break()
    {
        $this->assertEquals("", Separator::NO_LINE_BREAK);
    }

    /** @test */
    function it_returns_the_correct_line_break()
    {
        $this->assertEquals("\n", Separator::LINE_BREAK);
    }

    /** @test */
    function it_returns_the_correct_double_line_break()
    {
        $this->assertEquals("\n\n", Separator::DOUBLE_LINE_BREAK);
    }

    /** @test */
    function it_returns_the_correct_no_space()
    {
        $this->assertEquals("", Separator::NO_SPACE);
    }

    /** @test */
    function it_returns_the_correct_space()
    {
        $this->assertEquals(" ", Separator::SPACE);
    }

    /** @test */
    function it_returns_the_correct_double_space()
    {
        $this->assertEquals("  ", Separator::DOUBLE_SPACE);
    }

    /** @test */
    function it_returns_the_correct_dot()
    {
        $this->assertEquals(".", Separator::DOT);
    }

    /** @test */
    function it_returns_the_correct_dot_plus_space()
    {
        $this->assertEquals(". ", Separator::DOT_PLUS_SPACE);
    }

    /** @test */
    function it_returns_the_correct_dot_plus_double_space()
    {
        $this->assertEquals(".  ", Separator::DOT_PLUS_DOUBLE_SPACE);
    }

    /** @test */
    function it_returns_the_correct_bracket()
    {
        $this->assertEquals(")", Separator::BRACKET);
    }

    /** @test */
    function it_returns_the_correct_bracket_plus_space()
    {
        $this->assertEquals(") ", Separator::BRACKET_PLUS_SPACE);
    }

    /** @test */
    function it_returns_the_correct_bracket_plus_double_space()
    {
        $this->assertEquals(")  ", Separator::BRACKET_PLUS_DOUBLE_SPACE);
    }
}

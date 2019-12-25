<?php


namespace Cybersai\Tests\Modifiers;


use Cybersai\Ussd\Modifiers\RomanNumericUpperCaseNumbering;
use PHPUnit\Framework\TestCase;

class RomanNumericUpperCaseNumberingTest extends TestCase
{
    /**
     * @test
     * @dataProvider provider
     * @param $index
     * @param $number
     */
    function it_returns_the_correct_roman_number_for_that_index($index, $number)
    {
        $modifier = new class { use RomanNumericUpperCaseNumbering; };
        $this->assertEquals($number, $modifier->getNumberingForIndex($index));
    }

    function provider()
    {
        return [
            [0, 'I'],
            [1, 'II'],
            [2, 'III'],
            [20, 'XXI'],
            [99, 'C'],
        ];
    }
}
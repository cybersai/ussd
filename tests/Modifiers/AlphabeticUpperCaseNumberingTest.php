<?php


namespace Cybersai\Tests\Modifiers;


use Cybersai\Ussd\Modifiers\AlphabeticUpperCaseNumbering;
use PHPUnit\Framework\TestCase;

class AlphabeticUpperCaseNumberingTest extends TestCase
{
    /**
     * @test
     * @dataProvider provider
     * @param $index
     * @param $number
     */
    function it_returns_the_correct_alphabet_for_that_index($index, $number)
    {
        $modifier = new class { use AlphabeticUpperCaseNumbering; };
        $this->assertEquals($number, $modifier->getNumberingForIndex($index));
    }

    function provider()
    {
        return [
            [0, 'A'],
            [1, 'B'],
            [3, 'D'],
            [20, 'U'],
            [25, 'Z'],
        ];
    }
}
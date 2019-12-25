<?php


namespace Cybersai\Tests\Modifiers;


use Cybersai\Ussd\Modifiers\NumericNumbering;
use PHPUnit\Framework\TestCase;

class NumericNumberingTest extends TestCase
{
    /**
     * @test
     * @dataProvider provider
     * @param $index
     * @param $number
     */
    function it_returns_the_correct_number_for_that_index($index, $number)
    {
        $modifier = new class { use NumericNumbering; };
        $this->assertEquals($number, $modifier->getNumberingForIndex($index));
    }

    function provider()
    {
        return [
            [0, '1'],
            [1, '2'],
            [2, '3'],
            [20, '21'],
            [25, '26'],
        ];
    }
}
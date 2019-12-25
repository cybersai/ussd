<?php


namespace Cybersai\Tests\Modifiers;


use Cybersai\Ussd\Modifiers\RomanNumericLowerCaseNumbering;
use PHPUnit\Framework\TestCase;

class RomanNumericLowerCaseNumberingTest extends TestCase
{
    /**
     * @test
     * @dataProvider provider
     * @param $index
     * @param $number
     */
    function it_returns_the_correct_roman_number_for_that_index($index, $number)
    {
        $modifier = new class { use RomanNumericLowerCaseNumbering; };
        $this->assertEquals($number, $modifier->getNumberingForIndex($index));
    }

    function provider()
    {
        return [
            [0, 'i'],
            [1, 'ii'],
            [2, 'iii'],
            [20, 'xxi'],
            [99, 'c'],
        ];
    }
}
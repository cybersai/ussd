<?php


namespace Cybersai\Tests\Modifiers;


use Cybersai\Ussd\Modifiers\AlphabeticLowerCaseNumbering;
use PHPUnit\Framework\TestCase;

class AlphabeticLowerCaseNumberingTest extends TestCase
{
    /**
     * @test
     * @dataProvider provider
     * @param $index
     * @param $number
     */
    function it_returns_the_correct_alphabet_for_that_index($index, $number)
    {
        $modifier = new class { use AlphabeticLowerCaseNumbering; };
        $this->assertEquals($number, $modifier->getNumberingForIndex($index));
    }

    function provider()
    {
        return [
            [0, 'a'],
            [1, 'b'],
            [2, 'c'],
            [20, 'u'],
            [25, 'z'],
        ];
    }
}
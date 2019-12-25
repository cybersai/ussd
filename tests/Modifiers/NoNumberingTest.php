<?php


namespace Cybersai\Tests\Modifiers;


use Cybersai\Ussd\Modifiers\NoNumbering;
use PHPUnit\Framework\TestCase;

class NoNumberingTest extends TestCase
{
    /**
     * @test
     * @dataProvider provider
     * @param $index
     * @param $number
     */
    function it_returns_an_empty_string_for_every_index($index, $number)
    {
        $modifier = new class { use NoNumbering; };
        $this->assertEquals($number, $modifier->getNumberingForIndex($index));
    }

    function provider()
    {
        return [
            [0, ''],
            [1, ''],
            [2, ''],
            [25, ''],
            [100, ''],
        ];
    }
}
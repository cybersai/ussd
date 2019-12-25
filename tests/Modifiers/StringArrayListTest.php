<?php


namespace Cybersai\Tests\Modifiers;


use Cybersai\Ussd\Modifiers\StringArrayList;
use PHPUnit\Framework\TestCase;

class StringArrayListTest extends TestCase
{
    /**
     * @test
     * @dataProvider provider
     * @param $index
     * @param $number
     */
    function it_returns_the_correct_item_for_that_index($index, $number)
    {
        $modifier = new class { protected $content = ['One', 'Two', 'Three']; use StringArrayList; };
        $this->assertEquals($number, $modifier->getListItemForIndex($index));
    }

    function provider()
    {
        return [
            [0, 'One'],
            [1, 'Two'],
            [2, 'Three'],
        ];
    }
}
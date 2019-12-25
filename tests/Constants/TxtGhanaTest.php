<?php

namespace Cybersai\Tests\Constants;

use Cybersai\Ussd\Constants\Hubtel;
use Cybersai\Ussd\Constants\TxtGhana;
use PHPUnit\Framework\TestCase;

class TxtGhanaTest extends TestCase
{
    /**
     * @test
     * @dataProvider provider
     * @param string $key
     * @throws \ReflectionException
     */
    function it_has_the_require_constant_for_other_classes_to_use($key)
    {
        $txt_ghana = new \ReflectionClass(TxtGhana::class);
        $this->assertArrayHasKey($key, $txt_ghana->getConstants());
    }

    function provider()
    {
        return [
            ['SESSION_ID'],
            ['MSISDN'],
            ['NETWORK'],
            ['USER_INPUT'],
            ['TYPE'],
            ['RESPONSE_MESSAGE'],
            ['RESPONSE_TYPE'],
            ['RESPONSE_TYPE_CONTINUE'],
            ['RESPONSE_TYPE_END'],
        ];
    }
}

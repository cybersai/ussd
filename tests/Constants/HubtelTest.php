<?php

namespace Cybersai\Tests\Constants;

use Cybersai\Ussd\Constants\Hubtel;
use PHPUnit\Framework\TestCase;

class HubtelTest extends TestCase
{
    /**
     * @test
     * @dataProvider provider
     * @param string $key
     * @throws \ReflectionException
     */
    function it_has_the_require_constant_for_other_classes_to_use($key)
    {
        $hubtel = new \ReflectionClass(Hubtel::class);
        $this->assertArrayHasKey($key, $hubtel->getConstants());
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

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
            ['session_id'],
            ['MSISDN'],
            ['network'],
            ['user_input'],
            ['type'],
            ['response_message'],
            ['response_type'],
            ['response_type_continue'],
            ['response_type_end'],
        ];
    }
}

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

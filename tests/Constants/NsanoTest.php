<?php

namespace Cybersai\Tests\Constants;

use Cybersai\Ussd\Constants\Nsano;
use PHPUnit\Framework\TestCase;

class NsanoTest extends TestCase
{
    /**
     * @test
     * @dataProvider provider
     * @param string $key
     * @throws \ReflectionException
     */
    function it_has_the_require_constant_for_other_classes_to_use($key)
    {
        $nsano = new \ReflectionClass(Nsano::class);
        $this->assertArrayHasKey($key, $nsano->getConstants());
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

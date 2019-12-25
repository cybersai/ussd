<?php

namespace Cybersai\Tests\Adapters;

use Cybersai\Tests\Helpers\IAmSimpleView;
use Cybersai\Ussd\Adapters\KorbaRequestAdapter;
use Cybersai\Ussd\Constants\Korba;
use PHPUnit\Framework\TestCase;

class KorbaRequestAdapterTest extends TestCase
{
    /** @test */
    function it_parses_the_correct_korba_response()
    {
        $request = [
            Korba::SESSION_ID => '1234',
            Korba::MSISDN => '233234567890',
            Korba::NETWORK => '1',
            Korba::USER_INPUT => '*365#'
        ];

        $adapter = new KorbaRequestAdapter($request);
        $view = new IAmSimpleView($adapter);
        $response = $adapter->respondToProvider($view);
        $this->assertIsArray($response);
        $this->assertEquals([
            Korba::RESPONSE_MESSAGE => 'I am simple',
            Korba::RESPONSE_TYPE => Korba::RESPONSE_TYPE_END,
        ], $response);
    }
}

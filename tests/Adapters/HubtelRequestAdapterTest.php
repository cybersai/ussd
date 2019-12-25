<?php


namespace Cybersai\Tests\Adapters;


use Cybersai\Tests\Helpers\IAmSimpleView;
use Cybersai\Ussd\Adapters\HubtelRequestAdapter;
use Cybersai\Ussd\Constants\Hubtel;
use PHPUnit\Framework\TestCase;

class HubtelRequestAdapterTest extends TestCase
{
    /** @test */
    function it_parses_the_correct_hubtel_response()
    {
        $request = [
            Hubtel::SESSION_ID => '1234',
            Hubtel::MSISDN => '233234567890',
            Hubtel::NETWORK => 'Vodafone',
            Hubtel::USER_INPUT => '*365#'
        ];

        $adapter = new HubtelRequestAdapter($request);
        $view = new IAmSimpleView($adapter);
        $response = $adapter->respondToProvider($view);
        $this->assertIsArray($response);
        $this->assertEquals([
            Hubtel::RESPONSE_MESSAGE => 'I am simple',
            Hubtel::RESPONSE_TYPE => Hubtel::RESPONSE_TYPE_END,
            Hubtel::CLIENT_STATE => null
        ], $response);
    }
}
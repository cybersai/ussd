<?php

namespace Cybersai\Tests\Adapters;

use Cybersai\Tests\Helpers\IAmSimpleView;
use Cybersai\Ussd\Adapters\NsanoRequestAdapter;
use Cybersai\Ussd\Constants\Nsano;
use PHPUnit\Framework\TestCase;

class NsanoRequestAdapterTest extends TestCase
{
    /** @test */
    function it_parses_the_correct_nsano_response()
    {
        $request = [
            Nsano::SESSION_ID => '1234',
            Nsano::MSISDN => '233234567890',
            Nsano::NETWORK => 'VOD',
            Nsano::USER_INPUT => '*365#'
        ];

        $adapter = new NsanoRequestAdapter($request);
        $view = new IAmSimpleView($adapter);
        $response = $adapter->respondToProvider($view);
        $this->assertIsArray($response);
        $this->assertEquals([
            'USSDResp' => [
                Nsano::RESPONSE_MESSAGE => 'I am simple',
                Nsano::RESPONSE_TYPE => Nsano::RESPONSE_TYPE_END,
                'menus' => ''
            ]
        ], $response);
    }
}

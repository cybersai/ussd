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
            Nsano::session_id => '1234',
            Nsano::MSISDN => '233234567890',
            Nsano::network => 'VOD',
            Nsano::user_input => '*365#'
        ];

        $adapter = new NsanoRequestAdapter($request);
        $view = new IAmSimpleView($adapter);
        $response = $adapter->respondToProvider($view);
        $this->assertIsArray($response);
        $this->assertEquals([
            'USSDResp' => [
                Nsano::response_message => 'I am simple',
                Nsano::response_type => Nsano::response_type_end,
                'menus' => ''
            ]
        ], $response);
    }
}

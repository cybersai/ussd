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
            Korba::session_id => '1234',
            Korba::MSISDN => '233234567890',
            Korba::network => '1',
            Korba::user_input => '*365#'
        ];

        $adapter = new KorbaRequestAdapter($request);
        $view = new IAmSimpleView($adapter);
        $response = $adapter->respondToProvider($view);
        $this->assertIsArray($response);
        $this->assertEquals([
            Korba::response_message => 'I am simple',
            Korba::response_type => Korba::response_type_end,
        ], $response);
    }
}

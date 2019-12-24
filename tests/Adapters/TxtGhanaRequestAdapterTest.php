<?php

namespace Cybersai\Tests\Adapters;

use Cybersai\Tests\Helpers\IAmSimpleView;
use Cybersai\Ussd\Adapters\TxtGhanaRequestAdapter;
use Cybersai\Ussd\Constants\TxtGhana;
use PHPUnit\Framework\TestCase;

class TxtGhanaRequestAdapterTest extends TestCase
{
    /** @test */
    function it_parses_the_correct_txt_ghana_response()
    {
        $request = [
            TxtGhana::session_id => '1234',
            TxtGhana::MSISDN => '233234567890',
            TxtGhana::network => '1',
            TxtGhana::user_input => '*365#'
        ];

        $adapter = new TxtGhanaRequestAdapter($request);
        $view = new IAmSimpleView($adapter);
        $response = $adapter->respondToProvider($view);
        $this->assertIsArray($response);
        $this->assertEquals([
            TxtGhana::response_message => 'I am simple',
            TxtGhana::response_type => TxtGhana::response_type_end,
        ], $response);
    }
}

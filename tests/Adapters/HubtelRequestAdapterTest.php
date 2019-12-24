<?php


namespace Cybersai\Tests\Adapters;


use Cybersai\Ussd\Adapters\HubtelRequestAdapter;
use Cybersai\Ussd\Constants\Hubtel;
use Cybersai\Ussd\Styles\SimpleSingleView;
use Cybersai\Ussd\Templates\TemplateView;
use PHPUnit\Framework\TestCase;

class HubtelRequestAdapterTest extends TestCase
{
    public function it_parses_the_correct_hubtel_response()
    {
//        class MyView extends TemplateView {
//            use SimpleSingleView;
//            public function __construct($request)
//            {
//                $this->content = 'I am Simple';
//                parent::__construct($request);
//            }
//        }

        $request = [
            Hubtel::session_id => '1234',
            Hubtel::MSISDN => '233234567890',
            Hubtel::network => 'Vodafone',
            Hubtel::user_input => '*365#'
        ];
        $adapter = new HubtelRequestAdapter($request);
//        $response = $adapter->respondToProvider()
//        $this->
    }
}
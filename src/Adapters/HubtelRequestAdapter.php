<?php


namespace Cybersai\USSD\Adapters;


use Cybersai\USSD\Constants\Hubtel;
use Cybersai\USSD\Constants\Korba;
use Cybersai\USSD\Interfaces\ApiRequest;
use Cybersai\USSD\Requests\USSDRequest;

class HubtelRequestAdapter extends USSDRequest implements ApiRequest
{
    /**
     * KorbaRequestAdapter constructor.
     * @param $request
     */
    public function __construct($request)
    {
        $session_id = $request[Hubtel::session_id];
        $MSISDN = $request[Hubtel::MSISDN];
        $network = $request[Hubtel::network];
        $user_input = $request[Hubtel::user_input];
        parent::__construct($session_id, $MSISDN, $network, $user_input);
    }

    public function respondToProvider($view)
    {
        return [
            Hubtel::response_message => $view->parseToString(),
            Hubtel::response_type => $view->hasNext() ? Hubtel::response_type_continue : Hubtel::response_type_end,
            Hubtel::client_state => null
        ];
    }
}
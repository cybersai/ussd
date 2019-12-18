<?php


namespace Cybersai\Ussd\Adapters;


use Cybersai\Ussd\Constants\Hubtel;
use Cybersai\Ussd\Interfaces\ApiRequest;
use Cybersai\Ussd\Requests\UssdRequest;

class HubtelRequestAdapter extends UssdRequest implements ApiRequest
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
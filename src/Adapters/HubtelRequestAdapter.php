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
        $session_id = $request[Hubtel::SESSION_ID];
        $MSISDN = $request[Hubtel::MSISDN];
        $network = $request[Hubtel::NETWORK];
        $user_input = $request[Hubtel::USER_INPUT];
        parent::__construct($session_id, $MSISDN, $network, $user_input);
    }

    public function respondToProvider($view)
    {
        return [
            Hubtel::RESPONSE_MESSAGE => $view->parseToString(),
            Hubtel::RESPONSE_TYPE => $view->hasNext() ? Hubtel::RESPONSE_TYPE_CONTINUE : Hubtel::RESPONSE_TYPE_END,
            Hubtel::CLIENT_STATE => null
        ];
    }
}
<?php


namespace Cybersai\Ussd\Adapters;


use Cybersai\Ussd\Constants\Korba;
use Cybersai\Ussd\Constants\TxtGhana;
use Cybersai\Ussd\Interfaces\ApiRequest;
use Cybersai\Ussd\Requests\UssdRequest;

class TxtGhanaRequestAdapter extends UssdRequest implements ApiRequest
{
    /**
     * KorbaRequestAdapter constructor.
     * @param $request
     */
    public function __construct($request)
    {
        $session_id = $request[TxtGhana::SESSION_ID];
        $MSISDN = $request[TxtGhana::MSISDN];
        $network = $request[TxtGhana::NETWORK];
        $user_input = $request[TxtGhana::USER_INPUT];
        parent::__construct($session_id, $MSISDN, $network, $user_input);
    }

    function respondToProvider($view)
    {
        return [
            Korba::RESPONSE_MESSAGE => $view->parseToString(),
            Korba::RESPONSE_TYPE => $view->hasNext() ? Korba::RESPONSE_TYPE_CONTINUE : Korba::RESPONSE_TYPE_END
        ];
    }
}
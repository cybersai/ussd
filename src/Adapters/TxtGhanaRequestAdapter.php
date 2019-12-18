<?php


namespace Cybersai\USSD\Adapters;


use Cybersai\USSD\Constants\Korba;
use Cybersai\USSD\Constants\TxtGhana;
use Cybersai\USSD\Interfaces\ApiRequest;
use Cybersai\USSD\Requests\UssdRequest;

class TxtGhanaRequestAdapter extends UssdRequest implements ApiRequest
{
    /**
     * KorbaRequestAdapter constructor.
     * @param $request
     */
    public function __construct($request)
    {
        $session_id = $request[TxtGhana::session_id];
        $MSISDN = $request[TxtGhana::MSISDN];
        $network = $request[TxtGhana::network];
        $user_input = $request[TxtGhana::user_input];
        parent::__construct($session_id, $MSISDN, $network, $user_input);
    }

    function respondToProvider($view)
    {
        return [
            Korba::response_message => $view->parseToString(),
            Korba::response_type => $view->hasNext() ? Korba::response_type_continue : Korba::response_type_end
        ];
    }
}
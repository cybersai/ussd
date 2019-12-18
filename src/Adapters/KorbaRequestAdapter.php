<?php


namespace Cybersai\Ussd\Adapters;


use Cybersai\Ussd\Constants\Korba;
use Cybersai\Ussd\Interfaces\ApiRequest;
use Cybersai\Ussd\Requests\UssdRequest;

class KorbaRequestAdapter extends UssdRequest implements ApiRequest
{
    /**
     * KorbaRequestAdapter constructor.
     * @param $request
     */
    public function __construct($request)
    {
        $session_id = $request[Korba::session_id];
        $MSISDN = $request[Korba::MSISDN];
        $network = $request[Korba::network];
        $user_input = $request[Korba::user_input];
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
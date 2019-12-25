<?php


namespace Cybersai\Ussd\Adapters;


use Cybersai\Ussd\Constants\Nsano;
use Cybersai\Ussd\Interfaces\ApiRequest;
use Cybersai\Ussd\Requests\UssdRequest;

class NsanoRequestAdapter extends UssdRequest implements ApiRequest
{
    /**
     * KorbaRequestAdapter constructor.
     * @param $request
     */
    public function __construct($request)
    {
        $session_id = $request[Nsano::SESSION_ID];
        $MSISDN = $request[Nsano::MSISDN];
        $network = $request[Nsano::NETWORK];
        $user_input = $request[Nsano::USER_INPUT];
        parent::__construct($session_id, $MSISDN, $network, $user_input);
    }

    function respondToProvider($view)
    {
        return [
            'USSDResp' => [
                Nsano::RESPONSE_TYPE => $view->hasNext() ? Nsano::RESPONSE_TYPE_CONTITNUE : Nsano::RESPONSE_TYPE_END,
                'menus' => '',
                Nsano::RESPONSE_MESSAGE => $view->parseToString()
            ]
        ];
    }
}
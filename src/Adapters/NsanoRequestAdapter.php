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
        $session_id = $request[Nsano::session_id];
        $MSISDN = $request[Nsano::MSISDN];
        $network = $request[Nsano::network];
        $user_input = $request[Nsano::user_input];
        parent::__construct($session_id, $MSISDN, $network, $user_input);
    }

    function respondToProvider($view)
    {
        return [
            'USSDResp' => [
                Nsano::response_type => $view->hasNext() ? Nsano::response_type_continue : Nsano::response_type_end,
                'menus' => '',
                Nsano::response_message => $view->parseToString()
            ]
        ];
    }
}
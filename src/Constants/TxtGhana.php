<?php


namespace Cybersai\Ussd\Constants;


final class TxtGhana
{
    const SESSION_ID = 'sessionID';
    const MSISDN = 'msisdn';
    const NETWORK = 'network';
    const USER_INPUT = 'ussdString';
    const TYPE = 'ussdServiceOp'; # 1, 2, 17, 18
    # Response
    const RESPONSE_MESSAGE = 'message';
    const RESPONSE_TYPE = 'ussdServiceOp';
    # State
    const RESPONSE_TYPE_CONTINUE = 2;
    const RESPONSE_TYPE_END = 17;
    const REQUEST_INITIAL = 1;
    const REQUEST_CONTINUE = 18;
}
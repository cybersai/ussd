<?php


namespace Cybersai\Ussd\Constants;


final class Nsano
{
    const SESSION_ID = 'UserSessionID';
    const MSISDN = 'msisdn';
    const NETWORK = 'network';
    const USER_INPUT = 'msg';
    const TYPE = 'action'; # prompt, input, showMenu
    # Response
    const RESPONSE_MESSAGE = 'title';
    const RESPONSE_TYPE = 'action';
    # State
    const RESPONSE_TYPE_CONTINUE = 'input';
    const RESPONSE_TYPE_END = 'prompt';
}
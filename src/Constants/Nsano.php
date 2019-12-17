<?php


namespace Cybersai\USSD\Constants;


final class Nsano
{
    const session_id = 'UserSessionID';
    const MSISDN = 'msisdn';
    const network = 'network';
    const user_input = 'msg';
    const type = 'action'; # prompt, input, showMenu
    # Response
    const response_message = 'title';
    const response_type = 'action';
    # State
    const response_type_continue = 'input';
    const response_type_end = 'prompt';
}
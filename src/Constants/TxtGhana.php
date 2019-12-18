<?php


namespace Cybersai\Ussd\Constants;


final class TxtGhana
{
    const session_id = 'sessionID';
    const MSISDN = 'msisdn';
    const network = 'network';
    const user_input = 'ussdString';
    const type = 'ussdServiceOp'; # 1, 2, 17, 18
    # Response
    const response_message = 'message';
    const response_type = 'ussdServiceOp';
    # State
    const response_type_continue = 2;
    const response_type_end = 17;
    const request_initial = 1;
    const request_continue = 18;
}
<?php


namespace Cybersai\USSD\Constants;


final class Hubtel
{
    #Request
    const session_id = 'SessionId';
    const MSISDN = 'Mobile';
    const network = 'Operator';
    const user_input = 'Message';
    const type = 'Type'; # Initiation, Response, Release, Timeout
    # Response
    const response_message = 'Message';
    const response_type = 'Type';
    # State
    const response_type_continue = 'Response';
    const response_type_end = 'Release';
    const request_initial = 'Initial';
    const request_continue = 'Response';

    # Hubtel Specific
    const service_code = 'ServiceCode';
    const sequence = 'Sequence';
    const client_state = 'ClientState';
}
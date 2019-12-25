<?php


namespace Cybersai\Ussd\Constants;


final class Hubtel
{
    #Request
    const SESSION_ID = 'SessionId';
    const MSISDN = 'Mobile';
    const NETWORK = 'Operator';
    const USER_INPUT = 'Message';
    const TYPE = 'Type'; # Initiation, Response, Release, Timeout
    # Response
    const RESPONSE_MESSAGE = 'Message';
    const RESPONSE_TYPE = 'Type';
    # State
    const RESPONSE_TYPE_CONTINUE = 'Response';
    const RESPONSE_TYPE_END = 'Release';
    const REQUEST_INITIAL = 'Initial';
    const RESQUEST_CONTINUE = 'Response';

    # Hubtel Specific
    const SERVICE_CODE = 'ServiceCode';
    const SEQUENCE = 'Sequence';
    const CLIENT_STATE = 'ClientState';
}
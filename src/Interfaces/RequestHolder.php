<?php


namespace Cybersai\USSD\Interfaces;


use Cybersai\USSD\Requests\UssdRequest;

interface RequestHolder
{
    /**
     * View constructor.
     * @param UssdRequest $request
     */
    function __construct($request);
}
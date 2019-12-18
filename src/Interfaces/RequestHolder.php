<?php


namespace Cybersai\Ussd\Interfaces;


use Cybersai\Ussd\Requests\UssdRequest;

interface RequestHolder
{
    /**
     * View constructor.
     * @param UssdRequest $request
     */
    function __construct($request);
}
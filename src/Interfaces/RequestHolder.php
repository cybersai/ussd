<?php


namespace Cybersai\USSD\Interfaces;


use Cybersai\USSD\Requests\USSDRequest;

interface RequestHolder
{
    /**
     * View constructor.
     * @param USSDRequest $request
     */
    function __construct($request);
}
<?php


namespace Cybersai\USSD\Templates;


use Cybersai\USSD\Interfaces\ViewGroup;
use Cybersai\USSD\Requests\UssdRequest;

abstract class TemplateViewGroup implements ViewGroup
{
    /** @var ViewGroup[] $views Array of Groups */
    protected $views;
    /** @var UssdRequest $request */
    protected $request;

    /**
     * TemplateViewGroup constructor.
     * @param UssdRequest $request
     */
    public function __construct($request)
    {
        $this->request = $request;
    }
}
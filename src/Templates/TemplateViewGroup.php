<?php


namespace Cybersai\Ussd\Templates;


use Cybersai\Ussd\Interfaces\ViewGroup;
use Cybersai\Ussd\Requests\UssdRequest;

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
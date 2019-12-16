<?php


namespace Cybersai\USSD\Templates;


use Cybersai\USSD\Interfaces\ViewGroup;
use Cybersai\USSD\Interfaces\ViewValidator;
use Cybersai\USSD\Requests\USSDRequest;

abstract class TemplateViewValidator implements ViewValidator
{
    /** @var ViewGroup[] $views Array of Groups */
    protected $views;
    /** @var USSDRequest $request */
    protected $request;

    /**
     * TemplateViewGroup constructor.
     * @param USSDRequest $request
     */
    public function __construct($request)
    {
        $this->request = $request;
    }
}
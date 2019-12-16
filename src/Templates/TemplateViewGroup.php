<?php


namespace Cybersai\USSD\Templates;


use Cybersai\USSD\Interfaces\ViewGroup;

abstract class TemplateViewGroup implements ViewGroup
{
    /** @var ViewGroup[] $views Array of Groups */
    protected $views;
}
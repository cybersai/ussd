<?php


namespace Cybersai\USSD\Interfaces;


use Cybersai\USSD\Templates\TemplateView;

interface ApiRequest
{
    /**
     * ApiRequest constructor.
     * @param array $array
     */
    function __construct($array);

    /**
     * @param TemplateView $view
     * @return array
     */
    function respondToProvider($view);
}
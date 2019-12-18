<?php


namespace Cybersai\Ussd\Interfaces;


use Cybersai\Ussd\Templates\TemplateView;

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
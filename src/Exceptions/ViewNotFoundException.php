<?php

namespace Cybersai\Ussd\Exceptions;


class ViewNotFoundException extends \Exception
{
    public function __construct()
    {
        $message = "View is not an instance of either TemplateView, TemplateListView or TemplateViewValidator";
        $code = 0;
        $previous = null;
        parent::__construct($message, $code, $previous);
    }
}
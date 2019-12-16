<?php


namespace Cybersai\USSD\Exceptions;


use Throwable;

class ViewNotFound extends \Exception
{
    public function __construct()
    {
        $message = "View it not an instance of either TemplateView, TemplateListView or TemplateViewValidator";
        $code = 0;
        $previous = null;
        parent::__construct($message, $code, $previous);
    }
}
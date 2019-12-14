<?php

/**
 * Class at src/SimpleView.php.
 * File containing SimpleView class.
 * @api
 * @author Isaac Adzah Sai
 * @version 1.0.0
 */
namespace Cybersai\USSD;

/**
 * Class SimpleView help to create a simple ussd view.
 * It inherits for the abstract View Class and generates
 * a view with just one a body without title or footer.
 * @package Cybersai\USSD
 */
class SimpleView extends View
{
    protected function getTitle()
    {
        return "";
    }

    protected function getSectionSeparatorOne()
    {
        return "";
    }

    protected function getSectionSeparatorTwo()
    {
        return "";
    }

    protected function getBody()
    {
        return $this->content;
    }

    protected function getFooter()
    {
        return "";
    }
}
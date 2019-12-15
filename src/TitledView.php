<?php

/**
 * Class at src/TitledView.php.
 * File containing TitledView class.
 * @api
 * @author Isaac Adzah Sai
 * @version 1.0.0
 */
namespace Cybersai\USSD;

/**
 * Class TitledView help to create a simple ussd view with titles.
 * It inherits from the Simple View Class and generates
 * a view with just a body without title only.
 * @package Cybersai\USSD
 */
class TitledView extends SimpleView
{
    /** @var string $title Title of the USSD menu */
    protected $title;

    /**
     * Override the getTitle of SimpleView.
     * @return string
     */
    protected function getTitle()
    {
        return $this->title;
    }
}
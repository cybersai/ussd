<?php

/**
 * Interface at src/View.php.
 * File containing interface View class.
 * @api
 * @author Isaac Adzah Sai <isaacsai030@gmail.com>
 * @version 1.0.0
 */
namespace Cybersai\USSD\Interfaces;

use Cybersai\USSD\Requests\USSDRequest;

/**
 * Interface View specifies ussd view interface.
 * It helps to create decorators and other class.
 * It also maintains standards across the application.
 * @package Cybersai\USSD
 */
interface View
{
    function getSectionSeparatorOne();
    function getSectionSeparatorTwo();
    function parseToString();
}
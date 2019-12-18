<?php

/**
 * Interface at src/ListView.php.
 * File containing interface ListView class.
 * @api
 * @author Isaac Adzah Sai <isaacsai030@gmail.com>
 * @version 1.0.0
 */
namespace Cybersai\Ussd\Interfaces;

/**
 * Interface ListView specifies ussd list view interface.
 * It helps to create decorators and other class.
 * It also maintains standards across the application.
 * @package Cybersai\Ussd
 */
interface ListView extends View
{
    function getSubTitleSeparator();
    function getListSeparator();
    function getNumberingSeparator();
    function getNumberingForIndex($index);
    function getListItemForIndex($index);
    function getSubFooterSeparator();
    function parseListToString();
}
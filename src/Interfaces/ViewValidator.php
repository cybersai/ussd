<?php


namespace Cybersai\USSD\Interfaces;


interface ViewValidator extends RequestHolder
{
    function getValidView();
}
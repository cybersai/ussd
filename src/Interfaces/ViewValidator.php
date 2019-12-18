<?php


namespace Cybersai\Ussd\Interfaces;


interface ViewValidator extends RequestHolder
{
    function getValidView();
}
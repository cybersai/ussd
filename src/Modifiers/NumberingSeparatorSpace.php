<?php


namespace Cybersai\USSD\Modifiers;


use Cybersai\USSD\Separator;

trait NumberingSeparatorSpace
{
    function getNumberingSeparator() {
        return Separator::SPACE;
    }
}
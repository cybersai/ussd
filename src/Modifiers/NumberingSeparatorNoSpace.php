<?php


namespace Cybersai\USSD\Modifiers;


use Cybersai\USSD\Separator;

trait NumberingSeparatorNoSpace
{
    function getNumberingSeparator() {
        return Separator::NO_SPACE;
    }
}
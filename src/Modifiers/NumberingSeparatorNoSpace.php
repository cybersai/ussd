<?php


namespace Cybersai\USSD\Modifiers;


use Cybersai\USSD\Constants\Separator;

trait NumberingSeparatorNoSpace
{
    function getNumberingSeparator() {
        return Separator::NO_SPACE;
    }
}
<?php


namespace Cybersai\USSD\Modifiers;


use Cybersai\USSD\Constants\Separator;

trait NumberingSeparatorDot
{
    function getNumberingSeparator() {
        return Separator::DOT;
    }
}
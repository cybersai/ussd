<?php


namespace Cybersai\USSD\Modifiers;


use Cybersai\USSD\Separator;

trait NumberingSeparatorDot
{
    function getNumberingSeparator() {
        return Separator::DOT;
    }
}
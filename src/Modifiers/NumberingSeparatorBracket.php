<?php


namespace Cybersai\USSD\Modifiers;


use Cybersai\USSD\Separator;

trait NumberingSeparatorBracket
{
    function getNumberingSeparator() {
        return Separator::BRACKET;
    }
}
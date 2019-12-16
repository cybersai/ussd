<?php


namespace Cybersai\USSD\Modifiers;


use Cybersai\USSD\Constants\Separator;

trait NumberingSeparatorBracket
{
    function getNumberingSeparator() {
        return Separator::BRACKET;
    }
}
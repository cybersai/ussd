<?php


namespace Cybersai\Ussd\Modifiers;


use Cybersai\Ussd\Constants\Separator;

trait NumberingSeparatorBracket
{
    function getNumberingSeparator() {
        return Separator::BRACKET;
    }
}
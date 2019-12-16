<?php


namespace Cybersai\USSD\Modifiers;


use Cybersai\USSD\Constants\Separator;

trait NumberingSeparatorBracketPlusSpace
{
    function getNumberingSeparator() {
        return Separator::BRACKET_PLUS_SPACE;
    }
}
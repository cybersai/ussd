<?php


namespace Cybersai\USSD\Modifiers;


use Cybersai\USSD\Separator;

trait NumberingSeparatorBracketPlusSpace
{
    function getNumberingSeparator() {
        return Separator::BRACKET_PLUS_SPACE;
    }
}
<?php


namespace Cybersai\USSD\Modifiers;


use Cybersai\USSD\Separator;

trait NumberingSeparatorBracketPlusDoubleSpace
{
    function getNumberingSeparator() {
        return Separator::BRACKET_PLUS_DOUBLE_SPACE;
    }
}
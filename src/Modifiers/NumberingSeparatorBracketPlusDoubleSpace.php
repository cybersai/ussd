<?php


namespace Cybersai\Ussd\Modifiers;


use Cybersai\Ussd\Constants\Separator;

trait NumberingSeparatorBracketPlusDoubleSpace
{
    function getNumberingSeparator() {
        return Separator::BRACKET_PLUS_DOUBLE_SPACE;
    }
}
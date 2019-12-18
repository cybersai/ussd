<?php


namespace Cybersai\Ussd\Modifiers;


use Cybersai\Ussd\Constants\Separator;

trait NumberingSeparatorBracketPlusSpace
{
    function getNumberingSeparator() {
        return Separator::BRACKET_PLUS_SPACE;
    }
}
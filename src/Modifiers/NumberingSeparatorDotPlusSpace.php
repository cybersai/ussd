<?php


namespace Cybersai\USSD\Modifiers;


use Cybersai\USSD\Constants\Separator;

trait NumberingSeparatorDotPlusSpace
{
    function getNumberingSeparator() {
        return Separator::DOT_PLUS_SPACE;
    }
}
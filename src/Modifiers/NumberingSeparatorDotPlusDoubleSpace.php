<?php


namespace Cybersai\USSD\Modifiers;


use Cybersai\USSD\Constants\Separator;

trait NumberingSeparatorDotPlusDoubleSpace
{
    function getNumberingSeparator() {
        return Separator::DOT_PLUS_DOUBLE_SPACE;
    }
}
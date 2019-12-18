<?php


namespace Cybersai\Ussd\Modifiers;


use Cybersai\Ussd\Constants\Separator;

trait NumberingSeparatorDotPlusDoubleSpace
{
    function getNumberingSeparator() {
        return Separator::DOT_PLUS_DOUBLE_SPACE;
    }
}
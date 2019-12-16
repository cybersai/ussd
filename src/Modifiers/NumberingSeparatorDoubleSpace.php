<?php


namespace Cybersai\USSD\Modifiers;


use Cybersai\USSD\Constants\Separator;

trait NumberingSeparatorDoubleSpace
{
    function getNumberingSeparator() {
        return Separator::DOUBLE_SPACE;
    }
}
<?php


namespace Cybersai\USSD\Modifiers;


use Cybersai\USSD\Separator;

trait NumberingSeparatorDoubleSpace
{
    function getNumberingSeparator() {
        return Separator::DOUBLE_SPACE;
    }
}
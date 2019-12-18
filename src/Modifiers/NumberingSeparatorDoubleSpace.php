<?php


namespace Cybersai\Ussd\Modifiers;


use Cybersai\Ussd\Constants\Separator;

trait NumberingSeparatorDoubleSpace
{
    function getNumberingSeparator() {
        return Separator::DOUBLE_SPACE;
    }
}
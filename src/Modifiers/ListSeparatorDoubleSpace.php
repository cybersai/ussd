<?php


namespace Cybersai\USSD\Modifiers;


use Cybersai\USSD\Constants\Separator;

trait ListSeparatorDoubleSpace
{
    function getListSeparator() {
        return Separator::DOUBLE_SPACE;
    }
}
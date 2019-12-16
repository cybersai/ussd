<?php


namespace Cybersai\USSD\Modifiers;


use Cybersai\USSD\Separator;

trait ListSeparatorDoubleSpace
{
    function getListSeparator() {
        return Separator::DOUBLE_SPACE;
    }
}
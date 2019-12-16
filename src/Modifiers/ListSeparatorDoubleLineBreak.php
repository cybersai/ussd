<?php


namespace Cybersai\USSD\Modifiers;


use Cybersai\USSD\Constants\Separator;

trait ListSeparatorDoubleLineBreak
{
    function getListSeparator() {
        return Separator::DOUBLE_LINE_BREAK;
    }
}
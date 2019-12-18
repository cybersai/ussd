<?php


namespace Cybersai\Ussd\Modifiers;


use Cybersai\Ussd\Constants\Separator;

trait ListSeparatorDoubleLineBreak
{
    function getListSeparator() {
        return Separator::DOUBLE_LINE_BREAK;
    }
}
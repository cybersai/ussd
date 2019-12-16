<?php


namespace Cybersai\USSD\Modifiers;


use Cybersai\USSD\Constants\Separator;

trait ListSeparatorNoLineBreak
{
    function getListSeparator() {
        return Separator::NO_LINE_BREAK;
    }
}
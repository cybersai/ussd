<?php


namespace Cybersai\USSD\Modifiers;


use Cybersai\USSD\Constants\Separator;

trait ListSeparatorLineBreak
{
    function getListSeparator() {
        return Separator::LINE_BREAK;
    }
}
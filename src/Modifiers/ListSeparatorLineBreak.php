<?php


namespace Cybersai\USSD\Modifiers;


use Cybersai\USSD\Separator;

trait ListSeparatorLineBreak
{
    function getListSeparator() {
        return Separator::LINE_BREAK;
    }
}
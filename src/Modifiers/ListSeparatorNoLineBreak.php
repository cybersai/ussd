<?php


namespace Cybersai\USSD\Modifiers;


use Cybersai\USSD\Separator;

trait ListSeparatorNoLineBreak
{
    function getListSeparator() {
        return Separator::NO_LINE_BREAK;
    }
}
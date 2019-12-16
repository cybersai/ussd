<?php


namespace Cybersai\USSD\Modifiers;


use Cybersai\USSD\Separator;

trait SubFooterSeparatorDoubleLineBreak
{
    function getSubFooterSeparator() {
        return Separator::DOUBLE_LINE_BREAK;
    }
}
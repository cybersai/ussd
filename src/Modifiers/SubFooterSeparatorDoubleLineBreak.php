<?php


namespace Cybersai\USSD\Modifiers;


use Cybersai\USSD\Constants\Separator;

trait SubFooterSeparatorDoubleLineBreak
{
    function getSubFooterSeparator() {
        return Separator::DOUBLE_LINE_BREAK;
    }
}
<?php


namespace Cybersai\USSD\Modifiers;


use Cybersai\USSD\Separator;

trait SubFooterSeparatorNoLineBreak
{
    function getSubFooterSeparator() {
        return Separator::NO_LINE_BREAK;
    }
}
<?php


namespace Cybersai\USSD\Modifiers;


use Cybersai\USSD\Separator;

trait SubFooterSeparatorLineBreak
{
    function getSubFooterSeparator() {
        return Separator::LINE_BREAK;
    }
}
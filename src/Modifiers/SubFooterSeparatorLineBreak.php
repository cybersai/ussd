<?php


namespace Cybersai\USSD\Modifiers;


use Cybersai\USSD\Constants\Separator;

trait SubFooterSeparatorLineBreak
{
    function getSubFooterSeparator() {
        return Separator::LINE_BREAK;
    }
}
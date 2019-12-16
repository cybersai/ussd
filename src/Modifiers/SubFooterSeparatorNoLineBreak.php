<?php


namespace Cybersai\USSD\Modifiers;


use Cybersai\USSD\Constants\Separator;

trait SubFooterSeparatorNoLineBreak
{
    function getSubFooterSeparator() {
        return Separator::NO_LINE_BREAK;
    }
}
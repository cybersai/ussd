<?php


namespace Cybersai\Ussd\Modifiers;


use Cybersai\Ussd\Constants\Separator;

trait SubFooterSeparatorDoubleLineBreak
{
    function getSubFooterSeparator() {
        return Separator::DOUBLE_LINE_BREAK;
    }
}
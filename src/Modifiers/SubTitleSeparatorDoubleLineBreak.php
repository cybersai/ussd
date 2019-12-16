<?php


namespace Cybersai\USSD\Modifiers;


use Cybersai\USSD\Constants\Separator;

trait SubTitleSeparatorDoubleLineBreak
{
    function getSubTitleSeparator() {
        return Separator::DOUBLE_LINE_BREAK;
    }
}
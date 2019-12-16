<?php


namespace Cybersai\USSD\Modifiers;


use Cybersai\USSD\Separator;

trait SubTitleSeparatorDoubleLineBreak
{
    function getSubTitleSeparator() {
        return Separator::DOUBLE_LINE_BREAK;
    }
}
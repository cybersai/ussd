<?php


namespace Cybersai\Ussd\Modifiers;


use Cybersai\Ussd\Constants\Separator;

trait SubTitleSeparatorDoubleLineBreak
{
    function getSubTitleSeparator() {
        return Separator::DOUBLE_LINE_BREAK;
    }
}
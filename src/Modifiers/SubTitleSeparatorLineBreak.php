<?php


namespace Cybersai\USSD\Modifiers;


use Cybersai\USSD\Constants\Separator;

trait SubTitleSeparatorLineBreak
{
    function getSubTitleSeparator() {
        return Separator::LINE_BREAK;
    }
}
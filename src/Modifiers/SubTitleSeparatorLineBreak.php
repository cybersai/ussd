<?php


namespace Cybersai\USSD\Modifiers;


use Cybersai\USSD\Separator;

trait SubTitleSeparatorLineBreak
{
    function getSubTitleSeparator() {
        return Separator::LINE_BREAK;
    }
}
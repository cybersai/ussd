<?php


namespace Cybersai\USSD\Modifiers;


use Cybersai\USSD\Separator;

trait SubTitleSeparatorNoLineBreak
{
    function getSubTitleSeparator() {
        return Separator::NO_LINE_BREAK;
    }
}
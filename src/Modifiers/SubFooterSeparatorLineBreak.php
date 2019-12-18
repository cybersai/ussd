<?php


namespace Cybersai\Ussd\Modifiers;


use Cybersai\Ussd\Constants\Separator;

trait SubFooterSeparatorLineBreak
{
    function getSubFooterSeparator() {
        return Separator::LINE_BREAK;
    }
}
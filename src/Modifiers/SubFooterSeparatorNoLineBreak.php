<?php


namespace Cybersai\Ussd\Modifiers;


use Cybersai\Ussd\Constants\Separator;

trait SubFooterSeparatorNoLineBreak
{
    function getSubFooterSeparator() {
        return Separator::NO_LINE_BREAK;
    }
}
<?php


namespace Cybersai\Ussd\Modifiers;


use Cybersai\Ussd\Constants\Separator;

trait SubTitleSeparatorNoLineBreak
{
    function getSubTitleSeparator() {
        return Separator::NO_LINE_BREAK;
    }
}
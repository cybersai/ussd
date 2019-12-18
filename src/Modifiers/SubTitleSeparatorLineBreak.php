<?php


namespace Cybersai\Ussd\Modifiers;


use Cybersai\Ussd\Constants\Separator;

trait SubTitleSeparatorLineBreak
{
    function getSubTitleSeparator() {
        return Separator::LINE_BREAK;
    }
}
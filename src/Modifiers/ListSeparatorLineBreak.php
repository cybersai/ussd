<?php


namespace Cybersai\Ussd\Modifiers;


use Cybersai\Ussd\Constants\Separator;

trait ListSeparatorLineBreak
{
    function getListSeparator() {
        return Separator::LINE_BREAK;
    }
}
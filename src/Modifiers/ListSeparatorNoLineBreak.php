<?php


namespace Cybersai\Ussd\Modifiers;


use Cybersai\Ussd\Constants\Separator;

trait ListSeparatorNoLineBreak
{
    function getListSeparator() {
        return Separator::NO_LINE_BREAK;
    }
}
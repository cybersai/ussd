<?php


namespace Cybersai\Ussd\Modifiers;


use Cybersai\Ussd\Constants\Separator;

trait NumberingSeparatorNoSpace
{
    function getNumberingSeparator() {
        return Separator::NO_SPACE;
    }
}
<?php


namespace Cybersai\USSD\Modifiers;


use Cybersai\USSD\Constants\Separator;

trait NumberingSeparatorSpace
{
    function getNumberingSeparator() {
        return Separator::SPACE;
    }
}
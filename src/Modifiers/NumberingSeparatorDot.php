<?php


namespace Cybersai\Ussd\Modifiers;


use Cybersai\Ussd\Constants\Separator;

trait NumberingSeparatorDot
{
    function getNumberingSeparator() {
        return Separator::DOT;
    }
}
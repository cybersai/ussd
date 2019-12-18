<?php


namespace Cybersai\Ussd\Modifiers;


use Cybersai\Ussd\Constants\Separator;

trait NumberingSeparatorDotPlusSpace
{
    function getNumberingSeparator() {
        return Separator::DOT_PLUS_SPACE;
    }
}
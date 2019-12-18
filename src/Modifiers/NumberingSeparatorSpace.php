<?php


namespace Cybersai\Ussd\Modifiers;


use Cybersai\Ussd\Constants\Separator;

trait NumberingSeparatorSpace
{
    function getNumberingSeparator() {
        return Separator::SPACE;
    }
}
<?php


namespace Cybersai\USSD\Modifiers;


use Cybersai\USSD\Constants\Separator;

trait ListSeparatorSpace
{
    function getListSeparator() {
        return Separator::SPACE;
    }
}
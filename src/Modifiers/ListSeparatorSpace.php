<?php


namespace Cybersai\USSD\Modifiers;


use Cybersai\USSD\Separator;

trait ListSeparatorSpace
{
    function getListSeparator() {
        return Separator::SPACE;
    }
}
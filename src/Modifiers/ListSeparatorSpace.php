<?php


namespace Cybersai\Ussd\Modifiers;


use Cybersai\Ussd\Constants\Separator;

trait ListSeparatorSpace
{
    function getListSeparator() {
        return Separator::SPACE;
    }
}
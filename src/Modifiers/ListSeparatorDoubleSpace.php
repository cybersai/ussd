<?php


namespace Cybersai\Ussd\Modifiers;


use Cybersai\Ussd\Constants\Separator;

trait ListSeparatorDoubleSpace
{
    function getListSeparator() {
        return Separator::DOUBLE_SPACE;
    }
}
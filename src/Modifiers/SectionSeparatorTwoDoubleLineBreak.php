<?php


namespace Cybersai\Ussd\Modifiers;


use Cybersai\Ussd\Constants\Separator;

trait SectionSeparatorTwoDoubleLineBreak
{
    function getSectionSeparatorTwo() {
        return Separator::DOUBLE_LINE_BREAK;
    }
}
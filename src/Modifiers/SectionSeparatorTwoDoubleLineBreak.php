<?php


namespace Cybersai\USSD\Modifiers;


use Cybersai\USSD\Separator;

trait SectionSeparatorTwoDoubleLineBreak
{
    function getSectionSeparatorTwo() {
        return Separator::DOUBLE_LINE_BREAK;
    }
}
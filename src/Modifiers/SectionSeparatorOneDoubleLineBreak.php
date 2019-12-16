<?php


namespace Cybersai\USSD\Modifiers;


use Cybersai\USSD\Constants\Separator;

trait SectionSeparatorOneDoubleLineBreak
{
    function getSectionSeparatorOne() {
        return Separator::DOUBLE_LINE_BREAK;
    }
}
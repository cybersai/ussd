<?php


namespace Cybersai\Ussd\Modifiers;


use Cybersai\Ussd\Constants\Separator;

trait SectionSeparatorOneDoubleLineBreak
{
    function getSectionSeparatorOne() {
        return Separator::DOUBLE_LINE_BREAK;
    }
}
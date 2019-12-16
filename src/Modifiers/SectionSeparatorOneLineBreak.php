<?php


namespace Cybersai\USSD\Modifiers;


use Cybersai\USSD\Constants\Separator;

trait SectionSeparatorOneLineBreak
{
    function getSectionSeparatorOne() {
        return Separator::LINE_BREAK;
    }
}
<?php


namespace Cybersai\USSD\Modifiers;


use Cybersai\USSD\Separator;

trait SectionSeparatorOneLineBreak
{
    function getSectionSeparatorOne() {
        return Separator::LINE_BREAK;
    }
}
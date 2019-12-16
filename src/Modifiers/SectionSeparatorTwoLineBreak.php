<?php


namespace Cybersai\USSD\Modifiers;


use Cybersai\USSD\Constants\Separator;

trait SectionSeparatorTwoLineBreak
{
    function getSectionSeparatorTwo() {
        return Separator::LINE_BREAK;
    }
}
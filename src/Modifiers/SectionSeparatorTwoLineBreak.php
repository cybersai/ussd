<?php


namespace Cybersai\USSD\Modifiers;


use Cybersai\USSD\Separator;

trait SectionSeparatorTwoLineBreak
{
    function getSectionSeparatorTwo() {
        return Separator::LINE_BREAK;
    }
}
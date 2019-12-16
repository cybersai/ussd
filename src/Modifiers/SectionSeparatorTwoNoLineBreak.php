<?php


namespace Cybersai\USSD\Modifiers;


use Cybersai\USSD\Separator;

trait SectionSeparatorTwoNoLineBreak
{
    function getSectionSeparatorTwo() {
        return Separator::NO_LINE_BREAK;
    }
}
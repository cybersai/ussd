<?php


namespace Cybersai\USSD\Modifiers;


use Cybersai\USSD\Constants\Separator;

trait SectionSeparatorTwoNoLineBreak
{
    function getSectionSeparatorTwo() {
        return Separator::NO_LINE_BREAK;
    }
}
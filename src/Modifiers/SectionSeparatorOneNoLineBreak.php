<?php


namespace Cybersai\USSD\Modifiers;


use Cybersai\USSD\Separator;

trait SectionSeparatorOneNoLineBreak
{
    function getSectionSeparatorOne() {
        return Separator::NO_LINE_BREAK;
    }
}
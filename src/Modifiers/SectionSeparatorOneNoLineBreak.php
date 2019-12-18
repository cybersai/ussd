<?php


namespace Cybersai\Ussd\Modifiers;


use Cybersai\Ussd\Constants\Separator;

trait SectionSeparatorOneNoLineBreak
{
    function getSectionSeparatorOne() {
        return Separator::NO_LINE_BREAK;
    }
}
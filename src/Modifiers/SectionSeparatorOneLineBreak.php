<?php


namespace Cybersai\Ussd\Modifiers;


use Cybersai\Ussd\Constants\Separator;

trait SectionSeparatorOneLineBreak
{
    function getSectionSeparatorOne() {
        return Separator::LINE_BREAK;
    }
}
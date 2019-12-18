<?php


namespace Cybersai\Ussd\Modifiers;


use Cybersai\Ussd\Constants\Separator;

trait SectionSeparatorTwoLineBreak
{
    function getSectionSeparatorTwo() {
        return Separator::LINE_BREAK;
    }
}
<?php


namespace Cybersai\Ussd\Modifiers;


use Cybersai\Ussd\Constants\Separator;

trait SectionSeparatorTwoNoLineBreak
{
    function getSectionSeparatorTwo() {
        return Separator::NO_LINE_BREAK;
    }
}
<?php


namespace Cybersai\Ussd\Styles;


use Cybersai\Ussd\Modifiers\SectionSeparatorOneLineBreak;
use Cybersai\Ussd\Modifiers\SectionSeparatorTwoLineBreak;

trait CompactTitleWithFooterView
{
    use SectionSeparatorOneLineBreak, SectionSeparatorTwoLineBreak;
}
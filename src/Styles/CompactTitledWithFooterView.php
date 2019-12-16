<?php


namespace Cybersai\USSD\Styles;


use Cybersai\USSD\Modifiers\SectionSeparatorOneLineBreak;
use Cybersai\USSD\Modifiers\SectionSeparatorTwoLineBreak;

trait CompactTitledWithFooterView
{
    use SectionSeparatorOneLineBreak, SectionSeparatorTwoLineBreak;
}
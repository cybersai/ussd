<?php


namespace Cybersai\USSD\Styles;


use Cybersai\USSD\Modifiers\SectionSeparatorOneLineBreak;
use Cybersai\USSD\Modifiers\SectionSeparatorTwoNoLineBreak;
use Cybersai\USSD\Modifiers\SubFooterSeparatorNoLineBreak;
use Cybersai\USSD\Modifiers\SubTitleSeparatorLineBreak;

trait CompactSubTitleListView
{
    use SubTitleSeparatorLineBreak, SubFooterSeparatorNoLineBreak;
}
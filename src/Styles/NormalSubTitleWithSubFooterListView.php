<?php


namespace Cybersai\USSD\Styles;


use Cybersai\USSD\Modifiers\SectionSeparatorOneLineBreak;
use Cybersai\USSD\Modifiers\SectionSeparatorTwoNoLineBreak;
use Cybersai\USSD\Modifiers\SubFooterSeparatorDoubleLineBreak;
use Cybersai\USSD\Modifiers\SubFooterSeparatorNoLineBreak;
use Cybersai\USSD\Modifiers\SubTitleSeparatorDoubleLineBreak;
use Cybersai\USSD\Modifiers\SubTitleSeparatorLineBreak;

trait NormalSubTitleWithSubFooterListView
{
    use SubTitleSeparatorDoubleLineBreak, SubFooterSeparatorDoubleLineBreak;
}
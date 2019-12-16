<?php


namespace Cybersai\USSD\Styles;


use Cybersai\USSD\Modifiers\SubFooterSeparatorLineBreak;
use Cybersai\USSD\Modifiers\SubTitleSeparatorLineBreak;

trait CompactSubTitleWithSubFooterListView
{
    use SubTitleSeparatorLineBreak, SubFooterSeparatorLineBreak;
}
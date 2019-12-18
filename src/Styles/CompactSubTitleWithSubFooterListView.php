<?php


namespace Cybersai\Ussd\Styles;


use Cybersai\Ussd\Modifiers\SubFooterSeparatorLineBreak;
use Cybersai\Ussd\Modifiers\SubTitleSeparatorLineBreak;

trait CompactSubTitleWithSubFooterListView
{
    use SubTitleSeparatorLineBreak, SubFooterSeparatorLineBreak;
}
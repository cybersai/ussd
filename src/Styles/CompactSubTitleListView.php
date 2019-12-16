<?php


namespace Cybersai\USSD\Styles;


use Cybersai\USSD\Modifiers\SubFooterSeparatorNoLineBreak;
use Cybersai\USSD\Modifiers\SubTitleSeparatorLineBreak;

trait CompactSubTitleListView
{
    use SubTitleSeparatorLineBreak, SubFooterSeparatorNoLineBreak;
}
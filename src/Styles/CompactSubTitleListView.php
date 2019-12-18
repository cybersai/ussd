<?php


namespace Cybersai\Ussd\Styles;


use Cybersai\Ussd\Modifiers\SubFooterSeparatorNoLineBreak;
use Cybersai\Ussd\Modifiers\SubTitleSeparatorLineBreak;

trait CompactSubTitleListView
{
    use SubTitleSeparatorLineBreak, SubFooterSeparatorNoLineBreak;
}
<?php


namespace Cybersai\USSD\Styles;


use Cybersai\USSD\Modifiers\SubFooterSeparatorNoLineBreak;
use Cybersai\USSD\Modifiers\SubTitleSeparatorDoubleLineBreak;

trait NormalSubTitleListView
{
    use SubTitleSeparatorDoubleLineBreak, SubFooterSeparatorNoLineBreak;
}
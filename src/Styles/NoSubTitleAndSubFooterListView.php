<?php


namespace Cybersai\USSD\Styles;


use Cybersai\USSD\Modifiers\SubFooterSeparatorNoLineBreak;
use Cybersai\USSD\Modifiers\SubTitleSeparatorNoLineBreak;

trait NoSubTitleAndSubFooterListView
{
    use SubTitleSeparatorNoLineBreak, SubFooterSeparatorNoLineBreak;
}
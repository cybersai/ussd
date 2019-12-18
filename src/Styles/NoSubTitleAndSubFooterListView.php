<?php


namespace Cybersai\Ussd\Styles;


use Cybersai\Ussd\Modifiers\SubFooterSeparatorNoLineBreak;
use Cybersai\Ussd\Modifiers\SubTitleSeparatorNoLineBreak;

trait NoSubTitleAndSubFooterListView
{
    use SubTitleSeparatorNoLineBreak, SubFooterSeparatorNoLineBreak;
}
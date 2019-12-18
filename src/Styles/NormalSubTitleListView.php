<?php


namespace Cybersai\Ussd\Styles;


use Cybersai\Ussd\Modifiers\SubFooterSeparatorNoLineBreak;
use Cybersai\Ussd\Modifiers\SubTitleSeparatorDoubleLineBreak;

trait NormalSubTitleListView
{
    use SubTitleSeparatorDoubleLineBreak, SubFooterSeparatorNoLineBreak;
}
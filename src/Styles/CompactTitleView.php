<?php


namespace Cybersai\USSD\Styles;


use Cybersai\USSD\Modifiers\SectionSeparatorOneLineBreak;
use Cybersai\USSD\Modifiers\SectionSeparatorTwoNoLineBreak;

trait CompactTitleView
{
    use SectionSeparatorOneLineBreak, SectionSeparatorTwoNoLineBreak;
}
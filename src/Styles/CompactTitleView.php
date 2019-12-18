<?php


namespace Cybersai\Ussd\Styles;


use Cybersai\Ussd\Modifiers\SectionSeparatorOneLineBreak;
use Cybersai\Ussd\Modifiers\SectionSeparatorTwoNoLineBreak;

trait CompactTitleView
{
    use SectionSeparatorOneLineBreak, SectionSeparatorTwoNoLineBreak;
}
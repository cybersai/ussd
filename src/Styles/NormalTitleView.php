<?php


namespace Cybersai\Ussd\Styles;


use Cybersai\Ussd\Modifiers\SectionSeparatorOneDoubleLineBreak;
use Cybersai\Ussd\Modifiers\SectionSeparatorTwoNoLineBreak;

trait NormalTitleView
{
    use SectionSeparatorOneDoubleLineBreak, SectionSeparatorTwoNoLineBreak;
}
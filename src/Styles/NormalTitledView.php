<?php


namespace Cybersai\USSD\Styles;


use Cybersai\USSD\Modifiers\SectionSeparatorOneDoubleLineBreak;
use Cybersai\USSD\Modifiers\SectionSeparatorTwoNoLineBreak;

trait NormalTitledView
{
    use SectionSeparatorOneDoubleLineBreak, SectionSeparatorTwoNoLineBreak;
}
<?php


namespace Cybersai\Ussd\Styles;


use Cybersai\Ussd\Modifiers\SectionSeparatorOneDoubleLineBreak;
use Cybersai\Ussd\Modifiers\SectionSeparatorTwoDoubleLineBreak;

trait NormalTitleWithFooterView
{
    use SectionSeparatorOneDoubleLineBreak, SectionSeparatorTwoDoubleLineBreak;
}
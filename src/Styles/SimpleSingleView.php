<?php


namespace Cybersai\USSD\Styles;


use Cybersai\USSD\Modifiers\SectionSeparatorOneNoLineBreak;
use Cybersai\USSD\Modifiers\SectionSeparatorTwoNoLineBreak;

trait SimpleSingleView
{
    use SectionSeparatorOneNoLineBreak, SectionSeparatorTwoNoLineBreak;
}
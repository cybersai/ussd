<?php


namespace Cybersai\Ussd\Styles;


use Cybersai\Ussd\Modifiers\SectionSeparatorOneNoLineBreak;
use Cybersai\Ussd\Modifiers\SectionSeparatorTwoNoLineBreak;

trait SimpleSingleView
{
    use SectionSeparatorOneNoLineBreak, SectionSeparatorTwoNoLineBreak;
}
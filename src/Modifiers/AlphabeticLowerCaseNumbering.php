<?php


namespace Cybersai\USSD\Modifiers;


trait AlphabeticLowerCaseNumbering
{
    function getNumberingForIndex($index) {
        $alphabet = range('a', 'z');
        return $alphabet[$index];
    }
}
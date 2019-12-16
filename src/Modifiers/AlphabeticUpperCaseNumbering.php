<?php


namespace Cybersai\USSD\Modifiers;


trait AlphabeticUpperCaseNumbering
{
    function getNumberingForIndex($index) {
        $alphabet = range('A', 'Z');
        return $alphabet[$index];
    }
}
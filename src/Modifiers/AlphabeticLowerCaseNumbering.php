<?php


namespace Cybersai\Ussd\Modifiers;


trait AlphabeticLowerCaseNumbering
{
    function getNumberingForIndex($index) {
        $alphabet = range('a', 'z');
        return $alphabet[$index];
    }
}
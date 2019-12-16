<?php


namespace Cybersai\USSD\Modifiers;


trait NumericNumbering
{
    function getNumberingForIndex($index) {
        return $index + 1;
    }
}
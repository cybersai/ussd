<?php


namespace Cybersai\Ussd\Modifiers;


trait NumericNumbering
{
    function getNumberingForIndex($index) {
        return $index + 1;
    }
}
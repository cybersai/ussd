<?php


namespace Cybersai\Ussd\Modifiers;


trait NoNumbering
{
    function getNumberingForIndex($index) {
        return '';
    }
}
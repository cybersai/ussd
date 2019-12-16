<?php


namespace Cybersai\USSD\Modifiers;


trait StringArrayList
{
    function getListItemForIndex($index) {
        if (isset($this->content[$index])) {
            return $this->content[$index];
        }
    }
}
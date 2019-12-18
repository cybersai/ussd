<?php


namespace Cybersai\Ussd\Modifiers;


trait StringArrayList
{
    function getListItemForIndex($index) {
        if (isset($this->content[$index])) {
            return $this->content[$index];
        }
    }
}
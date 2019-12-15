<?php


namespace Cybersai\USSD;


interface ListView extends View
{
    function getSubTitleSeparator();
    function getListSeparator();
    function getNumberingSeparator();
    function getNumberingForIndex($index);
    function getSubFooterSeparator();
    function getSubFooter();
    function parseListToString();
}
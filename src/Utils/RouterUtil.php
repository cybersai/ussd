<?php


namespace Cybersai\USSD\Utils;


use Cybersai\USSD\Constants\Korba;

final class RouterUtil
{
    public static function getUserInputFromKorbaRequest($array) {
        return $array[Korba::user_input];
    }
}
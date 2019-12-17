<?php


namespace Cybersai\USSD\Utils;


use Cybersai\USSD\Constants\Hubtel;
use Cybersai\USSD\Constants\Korba;
use Cybersai\USSD\Constants\Nsano;
use Cybersai\USSD\Constants\TxtGhana;

final class RouterUtil
{
    public static function getUserInputFromKorbaRequest($array) {
        return $array[Korba::user_input];
    }

    public static function getUserInputFromTxtGhanaRequest($array) {
        return $array[TxtGhana::user_input];
    }

    public static function getUserInputFromNsanoRequest($array) {
        return $array[Nsano::user_input];
    }

    public static function getUserInputFromHubtelRequest($array) {
        return $array[Hubtel::user_input];
    }
}
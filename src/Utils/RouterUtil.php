<?php


namespace Cybersai\Ussd\Utils;


use Cybersai\Ussd\Constants\Hubtel;
use Cybersai\Ussd\Constants\Korba;
use Cybersai\Ussd\Constants\Nsano;
use Cybersai\Ussd\Constants\TxtGhana;

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
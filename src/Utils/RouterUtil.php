<?php


namespace Cybersai\Ussd\Utils;


use Cybersai\Ussd\Constants\Hubtel;
use Cybersai\Ussd\Constants\Korba;
use Cybersai\Ussd\Constants\Nsano;
use Cybersai\Ussd\Constants\TxtGhana;

final class RouterUtil
{
    public static function getUserInputFromKorbaRequest($array) {
        return $array[Korba::USER_INPUT];
    }

    public static function getUserInputFromTxtGhanaRequest($array) {
        return $array[TxtGhana::USER_INPUT];
    }

    public static function getUserInputFromNsanoRequest($array) {
        return $array[Nsano::USER_INPUT];
    }

    public static function getUserInputFromHubtelRequest($array) {
        return $array[Hubtel::USER_INPUT];
    }
}
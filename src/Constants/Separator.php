<?php

/**
 * Class at src/Separator.php.
 * File containing Separator class.
 * @api
 * @author Isaac Adzah Sai <isaacsai030@gmail.com>
 * @version 1.0.0
 */
namespace Cybersai\USSD\Constants;

/**
 * Class Separator help to define spaces between various components.
 * It a final class that prevents inheritance. It provides common
 * separator methods.
 * @package Cybersai\USSD
 */
final class Separator
{
    const NO_LINE_BREAK = "";
    const LINE_BREAK = "\n";
    const DOUBLE_LINE_BREAK = "\n\n";

    const NO_SPACE = "";
    const SPACE = " ";
    const DOUBLE_SPACE = "  ";
    const DOT = ".";
    const DOT_PLUS_SPACE = ". ";
    const DOT_PLUS_DOUBLE_SPACE = ".  ";
    const BRACKET = ")";
    const BRACKET_PLUS_SPACE = ") ";
    const BRACKET_PLUS_DOUBLE_SPACE = ")  ";
}
<?php

/**
 * Class at src/ViewUtil.php.
 * File containing ViewUtil class.
 * @api
 * @author Isaac Adzah Sai <isaacsai030@gmail.com>
 * @version 1.0.0
 */
namespace Cybersai\USSD;

/**
 * Class ViewUtil helps to with common functions.
 * It contains constants and commonly used functions
 * in the view class.
 * @package Cybersai\USSD
 */
final class ViewUtil
{
    /**
     * @param int $page
     * @return bool
     */
    public static function isFirstPage($page)
    {
        return $page == 1;
    }

    public static function isLastPage($page, $number_per_page, $list)
    {
        return $page * $number_per_page >= count($list);
    }

    public static function getListStartIndex($page, $number_per_page)
    {
        return $page * $number_per_page - $number_per_page;
    }

    public static function getListEndLimit($page, $number_per_page, $list)
    {
        return self::isLastPage($page, $number_per_page, $list) ?
            count($list) - ($page * $number_per_page - $number_per_page) : $number_per_page;
    }
}
<?php

namespace App\Library;

use Illuminate\Support\Str;

class CommonLibrary
{
    public static function randomizeReservationID($length)
    {
       return Str::random($length);
    }

    public static function changeDateFormat($sDate, $sCurrentFormat,$sNewFormat = 'Y-m-d')
    {
        $date = date_create_from_format($sCurrentFormat, $sDate);
        logger(date_format($date, $sNewFormat));
        return date_format($date, $sNewFormat);
    }

    public static function checkValidArray($mData)
    {
        return is_array($mData) === true && empty($mData) === false ? true : false;
    }

    public static function checkValidString($mData)
    {
        return is_string($mData) === true && empty($mData) === false ? true : false;
    }

    public static function checkValidYearMonthFormat($mDate)
    {
        return (preg_match("/^[0-9]{4}(0[1-9]|1[0-2])$/", $mDate)) ? true : false;
    }
}

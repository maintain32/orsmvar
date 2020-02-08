<?php

namespace App\Library;

use Illuminate\Support\Str;

class CommonLibrary
{
    public static function randomizeReservationID($length)
    {
       return Str::random($length);
    }
}

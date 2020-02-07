<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;
use App\Model\Reservation;

class ReservationRepository
{
    public function getAll()
    {
        return Reservation::all();
    }

    public function insert($aData)
    {
        try{
            return Reservation::create($aData);
        } catch(\Exception $e) {
            logger($e);
            return false;
        }
    }

    public function getReservationId($iId)
    {
        return Reservation::where('id', '=', $iId)->get();
    }
}

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
            logger('ReservationRepository@insert error : ' . $e);
            return false;
        }
    }

    public function getReservationId($iId)
    {
        return Reservation::where('booking_id', '=', $iId)->first();
    }

    public function getReservationCode($iId)
    {
        return Reservation::where('booking_code', '=', $iId)->get();
    }

    public function getAllReservationByDate($checkin, $bookingtime)
    {
        return Reservation::where('checkin_date', '=', $checkin)
            ->where('booking_time', '=', $bookingtime)
            ->where('booking_status', '!=', 'cancelled')
            ->get();
    }

    public function updateBookingStatus($iId, $sBookingStatus)
    {
        try{
            return Reservation::where('booking_code', '=', $iId)
                ->update(['booking_status' => $sBookingStatus]);
        } catch(\Exception $e) {
            logger('ReservationRepository@updateBookingReciept error : ' . $e);
            return false;
        }
    }

    public function updateBookingReciept($iBookingId, $aData)
    {
        try{
            return Reservation::where('booking_id', '=', $iBookingId)
                ->update($aData);
        } catch(\Exception $e) {
            logger('ReservationRepository@updateBookingReciept error : ' . $e);
            return false;
        }
    }

    public function updateBookingPayment($iBookingId, $aData)
    {
        try{
            return Reservation::where('booking_id', '=', $iBookingId)
                ->update($aData);
        } catch(\Exception $e) {
            logger('ReservationRepository@updateBookingReciept error : ' . $e);
            return false;
        }
    }
}

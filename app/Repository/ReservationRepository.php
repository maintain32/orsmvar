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
            ->whereNotIn('booking_status', ['payment_sent','reserved'])
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

    public function getMonthlyCancelledBooking()
    {
        try{
            return Reservation::select(DB::raw('count(*) as bookings_count, EXTRACT(YEAR_MONTH FROM booking_date) as month'))
                ->where('booking_status', 'cancelled')
                ->groupBy('month')
                ->orderBy('month', 'asc')
                ->limit(4)
                ->get();
        } catch(\Exception $e) {
            logger('ReservationRepository@getMonthlyCancelledBooking error : ' . $e);
            return false;
        }
    }

    public function getMonthlyRefund()
    {
        try{
            return Reservation::select(DB::raw('SUM(payment_amount) as monthly_income, EXTRACT(YEAR_MONTH FROM booking_date) as month'))
                ->where('booking_status', 'reserved')
                ->groupBy('month')
                ->orderBy('month', 'desc')
                ->limit(6)
                ->get();
        } catch(\Exception $e) {
            logger('ReservationRepository@getMonthlyRefund error : ' . $e);
            return false;
        }
    }

    public function getMonthlyBooking()
    {
        try{
            return Reservation::select(DB::raw('count(*) as bookings_count, EXTRACT(YEAR_MONTH FROM booking_date) as month'))
                ->whereIn('booking_status', array('reserved', 'payment sent'))
                ->groupBy('month')
                ->orderBy('month', 'asc')
                ->limit(4)
                ->get();
        } catch(\Exception $e) {
            logger('ReservationRepository@getMonthlyCancelledBooking error : ' . $e);
            return false;
        }
    }

    public function getMonthlyIncome()
    {
        try{
            return Reservation::select(DB::raw('SUM(grand_total) as monthly_income, EXTRACT(YEAR_MONTH FROM booking_date) as month'))
                ->whereIn('booking_status', array('reserved', 'payment sent'))
                ->groupBy('month')
                ->orderBy('month', 'desc')
                ->limit(6)
                ->get();
        } catch(\Exception $e) {
            logger('ReservationRepository@getMonthlyIncome error : ' . $e);
            return false;
        }
    }

    public function getReservedBooking()
    {
        try{
            return Reservation::select('booking_id', 'booking_time', 'message', 'grand_total', 'booking_status')
                ->whereIn('booking_status', array('reserved', 'payment sent'))
                ->where('checkin_date', '>=', date("Y-m-d"))
                ->orderBy('checkin_date', 'asc')
                ->limit(6)
                ->get();
        } catch(\Exception $e) {
            logger('ReservationRepository@getReservedBooking error : ' . $e);
            return false;
        }
    }

    public function getUpcomingEvents()
    {
        try{
            return Reservation::select('name', 'payment_status')
                ->whereIn('booking_status', array('reserved', 'payment sent'))
                ->where('checkin_date', '>=', date("Y-m-d"))
                ->orderBy('checkin_date', 'asc')
                ->limit(6)
                ->get();
        } catch(\Exception $e) {
            logger('ReservationRepository@getUpcomingEvents error : ' . $e);
            return false;
        }
    }
}

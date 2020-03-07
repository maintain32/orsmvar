<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bookings';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'booking_id';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    const CREATED_AT = 'booking_date';
    const UPDATED_AT = 'booking_update';

    protected $fillable = [
        'booking_id',
        'booking_date',
        'booking_code',
        'name',
        'phone',
        'email',
        'checkin_date',
        'checkout_date',
        'booking_time',
        'total_guest',
        'message',
        'total_rate',
        'reservation_fee',
        'additional_guest',
        'additional_guest_fee',
        'additional_room',
        'additional_gas',
        'additional_refrigerator',
        'additional_hours',
        'grand_total',
        'booking_status'
    ];
}

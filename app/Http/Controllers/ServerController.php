<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\ReservationRepository;
use App\Library\CommonLibrary;
use Validator;

class ServerController extends Controller
{
    private $oRequest;

    private $oReservationModel;

    public function __construct(Request $oRequest)
    {
        $this->oRequest = $oRequest;
        $this->oReservationModel = new ReservationRepository();
    }

    public function saveReservation()
    {
        $aData = $this->oRequest->toArray();
        $aValidateData = $this->validateData($aData);
        if ($aValidateData->passes())
        {
            $aReservationData = $this->formatData($aData);
            $mResult = $this->oReservationModel->insert($aReservationData);
            if ($mResult === false) {
                return [
                    'bResult'      => false,
                    'return_title' => 'Unable to reserve date',
                    'return_msg'   => 'Reservation date already taken',
                    'icon'         => 'error'
                ];
            }
            return [
                'bResult'      => true,
                'return_title' => 'Successfully reserve date',
                'return_msg'   => 'Congratulations',
                'icon'         => 'success'
            ];
        }

        return [
            'bResult'      => false,
            'return_title' => $aValidateData->errors()->first(),
            'return_msg'   => 'Please fill up valid data to the necessary field',
            'icon'         => 'error'
        ];
    }

    private function formatData($aData)
    {
        $aData['booking_code'] = CommonLibrary::randomizeReservationID(10);
        $aData['message'] = nl2br($aData['message']);

        $iReservationRate = $aData['booking_time'] === 'daytime' ? 11000 : 13000;
        $iAdditionalGuestFee = $aData['booking_time'] === 'daytime' ? 150 : 200;

        $aData['additional_guest'] = $aData['total_guest'] - 50;
        $aData['additional_guest'] = $aData['additional_guest'] <= 0 ? 0 : $aData['additional_guest'];

        $aData['additional_guest_fee'] = $aData['additional_guest'] * $iAdditionalGuestFee;

        $aData['additional_hours'] = 0;
        $aData['additional_room'] = $aData['additional_room'] === 'true' ? 3000 : 0;
        $aData['additional_gas'] = $aData['additional_gas'] === 'true' ? 300 : 0;
        $aData['additional_refrigerator'] = $aData['additional_refrigerator'] === 'true' ? 300 : 0;
        $aData['total_rate'] = $iReservationRate + $aData['additional_guest_fee'];

        $aData['grand_total'] = $aData['total_rate'] + $aData['additional_room'] + $aData['additional_gas'] + $aData['additional_refrigerator'];
        $aData['reservation_fee'] =  $aData['grand_total'] * .25;

        return $aData;
    }

    private function validateData($aData)
    {
      $rules = [
            'name'          => 'required',
            'phone'         => 'required|size:11',
            'email'         => 'required|email:rfc',
            'checkin_date'  => 'required|date|after:tomorrow',
            'checkout_date' => 'required|after_or_equal:checkin_date',
            'total_guest'   => 'numeric|min:1',
            'message'       => 'required|max:50',
            'additional_room' => 'required',
            'additional_gas' => 'required',
            'additional_refrigerator' => 'required',
        ];

        $messages = [
            'name.required'                => 'Name is required',
            'phone.required'               => 'Phone is required',
            'phone.size'                   => 'Invalid phone number',
            'email.required'               => 'Email is required',
            'checkin_date.required'        => 'Check-in date is required',
            'checkin_date.after'           => 'Earliest booking can be made tomorrow',
            'checkout_date.required'       => 'Check-out date is required',
            'checkout_date.after_or_equal' => 'Check-out date must be later than check-in date',
            'total_guest.numeric'          => 'Adults pax count must be numeric',
            'message.required'             => 'Message is required',
            'message.max'                  => 'maximum of 50 characters only for message',
            'additional_room.required' => 'additional_room is required',
            'additional_gas.required' => 'additional_gas is required',
            'additional_refrigerator.required' => 'additional_refrigerator is required',
        ];

        return Validator::make($aData, $rules, $messages);
    }
}

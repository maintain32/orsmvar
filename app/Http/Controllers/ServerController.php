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
        $aReservationData = $this->oRequest->toArray();
        $aValidateData = $this->validateData($aReservationData);
        if ($aValidateData->passes())
        {
            $aReservationData['reservation_ID'] = CommonLibrary::randomizeReservationID(10);
            logger($aReservationData);
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

    private function validateData($aData)
    {
      $rules = [
            'name'          => 'required',
            'phone'         => 'required|size:11',
            'email'         => 'required|email:rfc',
            'checkin_date'  => 'required|date|after:tomorrow',
            'checkout_date' => 'required|after_or_equal:checkin_date',
            'adults'        => 'numeric|min:1',
            'children'      => 'numeric',
            'message'       => 'required|max:50',
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
            'adults.numeric'               => 'Adults pax count must be numeric',
            'children.numeric'             => 'Adults pax count must be numeric',
            'message.required'             => 'Message is required',
            'message.max'                  => 'maximum of 50 characters only for message',
        ];

        return Validator::make($aData, $rules, $messages);
    }
}

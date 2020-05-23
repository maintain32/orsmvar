<?php
namespace App\Service;

use App\Repository\ReservationRepository;
use Validator;
use Mail;

class ReservationService extends BaseService
{
    /**
     * @var Login
     */
    private $oReservationRepository;

    public function __construct()
    {
        parent::__construct();
        $this->oReservationRepository = new ReservationRepository();
    }

    public function uploadReceipt($aData)
    {
        $aValidateData = $this->validateReceipt($aData);

        if ($aValidateData->passes())
        {
            $aBooking = [
                'booking_status'  => 'paid',
                'payment_receipt' => $this->uploadImages($aData)
            ];
            return $this->updateBookingDetail($aData['booking_id'], $aBooking);
        }

        return [
            'status'  => 404,
            'message' => $aValidateData->errors()->first()
        ];
    }

    private function validateReceipt($aData)
    {
        $rules = [
            'booking_id'         => 'required',
            'input-file-preview' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ];

        $messages = [
            'booking_id.required'          => 'Invalid reservation ticket',
            'input-file-preview.required'  => 'Receipt photo is required',
            'input-file-preview.image'     => 'Invalid receipt photo',
        ];

        return Validator::make($aData, $rules, $messages);
    }

    private function uploadImages($aData)
    {
        $image = $aData['input-file-preview'];
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads'), $new_name);
        return '/uploads/' .$new_name;
    }

    private function updateBookingDetail($iBookingId, $aData)
    {
        $bResult = $this->oReservationRepository->updateBookingReciept($iBookingId, $aData);
        if ($bResult === 1) {
            return [
                'status'  => 200,
                'message' => $bResult
            ];
        }
        return [
            'status'  => 400,
            'message' => 'Unable to upload receipt to database'
        ];
    }

    public function getUploadedReceipt($aData)
    {
        $aData = $this->oReservationRepository->getReservationId($aData['reservation_id'])->toArray();
        if (array_key_exists('payment_receipt', $aData) === true) {
            if (empty($aData['payment_receipt']) === false) {
                $this->aReturnData['message'] =  $aData['payment_receipt'];
            } else {
                $this->aReturnData['message'] = 'no payment receipt submitted yet';
                $this->aReturnData['status'] = 401;
            }
        } else {
            $this->aReturnData['message'] = 'booking doesn\'t exist';
            $this->aReturnData['status'] = 401;
        }
        return $this->aReturnData;
    }
}

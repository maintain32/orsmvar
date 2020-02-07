<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\ReservationRepository;

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
        $aReservationData['reservation_ID'] = 0;
        // dd($aReservationData);
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
}

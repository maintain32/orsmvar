<?php
namespace App\Http\Controllers;

use App\Service\LoginService;
use App\Service\ReservationService;
use Illuminate\Http\Request;

class RestController extends BaseController
{
    private $oRequest;

    private $aReturnData = [];

    /**
     * @var LoginService
     */
    private $oLoginService;

    /**
     * @var ReservationService
     */
    private $oReservationService;

    public function __construct(Request $oRequest)
    {
        $this->oRequest = $oRequest;
        $this->oLoginService = new LoginService();
        $this->oReservationService = new ReservationService();
        $this->aReturnData['bResult'] = true;
    }

    public function doLogin()
    {
        $aData = $this->oRequest->toArray();
        return $this->oLoginService->checkLoginAccess($aData);
    }

    public function uploadReceipt()
    {
        $aData = $this->oRequest->toArray();
        return $this->oReservationService->uploadReceipt($aData);
    }

    public function getUploadedReceipt()
    {
        $aData = $this->oRequest->toArray();
        return $this->oReservationService->getUploadedReceipt($aData);
    }

    public function sendPaymentConfirmation()
    {
        $aData = $this->oRequest->toArray();
        return $this->oReservationService->sendPaymentConfirmation($aData);
    }

    public function getDashboardData()
    {
        return $this->oReservationService->getDashboardData();
    }
}

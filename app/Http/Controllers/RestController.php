<?php
namespace App\Http\Controllers;

use App\Service\LoginService;
use Illuminate\Http\Request;

class RestController extends BaseController
{
    private $oRequest;

    private $aReturnData = [];

    /**
     * @var LoginService
     */
    private $oLoginService;

    public function __construct(Request $oRequest)
    {
        $this->oRequest = $oRequest;
        $this->oLoginService = new LoginService();
        $this->aReturnData['bResult'] = true;
    }

    public function doLogin()
    {
        $aData = $this->oRequest->toArray();
        return $this->oLoginService->checkLoginAccess($aData);
    }
}

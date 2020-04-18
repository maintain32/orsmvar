<?php
namespace App\Service;

use App\Repository\LoginRepository;
use Validator;
use Mail;

class LoginService
{
    /**
     * @var Login
     */
    private $oLoginRepository;

    /**
     * @var array $aReturnData
     */
    private $aReturnData;

    public function __construct()
    {
        $this->oLoginRepository = new LoginRepository();
        $this->aReturnData = [
            'status'  => 200,
            'message' => 'string message'
        ];
    }

    /**
     * @param array $aData
     */
    public function checkLoginAccess($aData)
    {
        $aUser = $this->oLoginRepository->getUserDetails($aData['username']);
        if (empty($aUser) === false && $aUser['password'] === $aData['password']) {
            $this->aReturnData['message'] = 'Successful Login';
            $this->setSession($aUser);
            return $this->aReturnData;
        }
        $this->aReturnData['status']  = 404;
        $this->aReturnData['message'] = 'No user found';
        return $this->aReturnData;
    }

    private function setSession($aUser)
    {
        session([
            'user' => [
                'id'       => $aUser['admin_id'],
                'name'     => $aUser['name'],
                'username' => $aUser['username'],
                'type'     => 'admin'
            ]
        ]);
    }
}

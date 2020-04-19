<?php
namespace App\Service;

use App\Repository\LoginRepository;
use Validator;
use Mail;

class LoginService extends BaseService
{
    /**
     * @var Login
     */
    private $oLoginRepository;

    public function __construct()
    {
        parent::__construct();
        $this->oLoginRepository = new LoginRepository();
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

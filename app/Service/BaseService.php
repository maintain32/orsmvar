<?php
namespace App\Service;

use App\Repository\LoginRepository;
use Validator;
use Mail;

class BaseService
{
    /**
     * @var array $aReturnData
     */
    protected $aReturnData;

    public function __construct()
    {
        $this->aReturnData = [
            'status'  => 200,
            'message' => 'string message'
        ];
    }
}

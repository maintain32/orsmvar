<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;
use App\Model\Admin;

class LoginRepository
{
    public function getUserDetails($sUsername)
    {
        return Admin::where('username', '=', $sUsername)->first();
    }
}

<?php
namespace App\Http\Controllers;


class BaseController extends Controller
{
    protected function returnSweetAlert($bResult, $return_title, $return_msg, $icon)
    {
        return [
            'bResult'      => false,
            'return_title' => 'Unable to reserve date',
            'return_msg'   => 'Reservation date already taken',
            'icon'         => 'error'
        ];
    }
}

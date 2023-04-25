<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Latihan extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'AAGym | Latihan'
        ];
        return view('/outercontent/latihan', $data);
    }
}

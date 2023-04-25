<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'AAGym'
        ];
        return view('/outercontent/index', $data);
    }
}

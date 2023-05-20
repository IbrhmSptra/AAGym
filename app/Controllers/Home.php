<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $username = "";
        if (logged_in()) {
            $user = user();
            $username = $user->username;
        }
        $data = [
            'title' => 'AAGym',
            'username' => $username
        ];
        return view('/outercontent/index', $data);
    }
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Tentang extends BaseController
{
    public function index()
    {
        return view("/outercontent/about");
    }
}

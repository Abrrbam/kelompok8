<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function index()
    {
        $data=[
            "title" => 'Dashboard Admin'
        ];

        return view('admin/dashboard', $data);

    }
}

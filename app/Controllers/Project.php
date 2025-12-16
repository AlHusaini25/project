<?php

namespace App\Controllers;

class Project extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Daftar Project'
        ];

        return view('project/index', $data);
    }
}

<?php

namespace App\Controllers;

use App\Models\ProjectModel;

class Project extends BaseController
{
    protected $projectModel; 
    public function __construct()
    {
        $this->projectModel = new ProjectModel();
    }
    public function index()
    {
        $project = $this->projectModel->findAll();

        $data = [
            'title' => 'Daftar Project',
            'project' => $project
        ];

        // $projectModel = new ProjectModel();

        return view('project/index', $data);
    }
}

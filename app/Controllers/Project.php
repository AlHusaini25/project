<?php

namespace App\Controllers;

use App\Models\ProjectModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Project extends BaseController
{
    protected $projectModel;

    public function __construct()
    {
        $this->projectModel = new ProjectModel();
    }

    // =====================
    // HALAMAN LIST PROJECT
    // =====================
    public function index()
    {
        return view('project/index', [
            'title'   => 'Daftar Project',
            'project' => $this->projectModel->findAll()
        ]);
    }

    // =====================
    // HALAMAN DETAIL PROJECT
    // =====================
    public function detail($slug)
    {
        $project = $this->projectModel
            ->where('slug', $slug)
            ->first();

        if (!$project) {
            throw PageNotFoundException::forPageNotFound();
        }

        return view('project/detail', [
            'title'   => $project['nama_project'],
            'project' => $project
        ]);
    }
}   

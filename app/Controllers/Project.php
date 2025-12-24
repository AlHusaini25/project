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
        helper(['form', 'url']); // load helper form & url
    }

    // List semua project
    public function index()
    {
        $data = [
            'title'   => 'Daftar Project',
            'project' => $this->projectModel->findAll()
        ];

        return view('project/index', $data);
    }

    // Form tambah project
    public function create()
    {
        $data = [
            'title' => 'Tambah Project',
            'validation' => \Config\Services::validation()
        ];

        return view('project/create', $data);
    }

    // Simpan project
    public function save()
    {
        $rules = [
            'nama_project' => 'required|min_length[3]|max_length[255]|is_unique[project.nama_project]',
            'deskripsi'    => 'permit_empty|max_length[1000]',
            'gambar'       => 'permit_empty|is_image[gambar]|max_size[gambar,1024]' // max 1MB
        ];

        if (!$this->validate($rules)) {
            return redirect()->to('/project/create')->withInput()->with('validation', $this->validator);
        }

        // Generate slug otomatis dari nama_project
        $slug = url_title($this->request->getVar('nama_project'), '-', true);

        // Handle upload gambar
        $fileGambar = $this->request->getFile('gambar');
        if ($fileGambar && $fileGambar->isValid() && !$fileGambar->hasMoved()) {
            $fileName = $fileGambar->getRandomName();
            $fileGambar->move(WRITEPATH . 'uploads', $fileName);
        } else {
            $fileName = null;
        }

        $this->projectModel->save([
            'nama_project' => $nama_project,
            'slug'         => $slug,
            'deskripsi'    => $this->request->getVar('deskripsi'),
            'gambar'       => $fileName
        ]);

        return redirect()->to('/project')->with('success', 'Project berhasil ditambahkan.');
    }

    // Detail project berdasarkan slug
    public function detail($slug)
    {
        $project = $this->projectModel->where('slug', $slug)->first();

        if (!$project) {
            throw PageNotFoundException::forPageNotFound("Project '$slug' tidak ditemukan.");
        }

        $data = [
            'title'     => $project['nama_project'],
            'project'   => $project,
            'deskripsi' => $project['deskripsi'] ?? 'Tidak ada deskripsi'
        ];

        return view('project/detail', $data);
    }
}

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
        return view('project/create', [
            'title'      => 'Tambah Project',
            'validation' => session()->getFlashdata('validation')
                ?? \Config\Services::validation()
        ]);
    }

    // Simpan project
    public function save()
    {
        $rules = [
            'nama_project' => 'required|min_length[3]|max_length[255]|is_unique[project.nama_project]',
            'deskripsi'    => 'required|max_length[1000]', // wajib diisi
            'gambar'       => 'permit_empty|is_image[gambar]|max_size[gambar,1024]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->to('/project/create')
                ->withInput()
                ->with('validation', $this->validator);
        }

        $nama_project = $this->request->getVar('nama_project');

        $fileGambar = $this->request->getFile('gambar');
        if ($fileGambar && $fileGambar->isValid() && !$fileGambar->hasMoved()) {
            $fileName = $fileGambar->getRandomName();
            $fileGambar->move(ROOTPATH . 'public/uploads', $fileName);
        } else {
            $fileName = null;
        }

        $this->projectModel->save([
            'nama_project' => $nama_project,
            'slug'         => url_title($nama_project, '-', true),
            'deskripsi'    => $this->request->getVar('deskripsi'),
            'gambar'       => $fileName
        ]);

        session()->setFlashdata('pesan', 'Project berhasil ditambahkan.');
        return redirect()->to('/project');
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

    public function delete($id = null)
    {
        // Logika hapus data
        $this->projectModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/project');
    }

    public function edit($id)
    {
        $project = $this->projectModel->find($id);

        if (! $project) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Project tidak ditemukan');
        }

        return view('project/edit', [
            'title'      => 'Edit Project',
            'project'    => $project,
            'validation' => session()->getFlashdata('validation')
                ?? \Config\Services::validation(),
        ]);
    }







    public function update($id)
    {
        $project = $this->projectModel->find($id);

        if (! $project) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Project tidak ditemukan');
        }

        // =====================
        // RULE VALIDASI EDIT
        // =====================
        $rules = [
            'nama_project' => [
                'rules'  => "required|min_length[3]|is_unique[project.nama_project,id,$id]",
                'errors' => [
                    'required'   => 'Nama project wajib diisi',
                    'min_length' => 'Nama project minimal 3 karakter',
                    'is_unique'  => 'Nama project sudah digunakan',
                ],
            ],
            'deskripsi' => [
                'rules'  => 'required|min_length[5]',
                'errors' => [
                    'required'   => 'Deskripsi wajib diisi',
                    'min_length' => 'Deskripsi minimal 5 karakter',
                ],
            ],
            'gambar' => [
                'rules'  => 'if_exist|max_size[gambar,2048]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar maksimal 2MB',
                    'is_image' => 'File harus berupa gambar',
                    'mime_in'  => 'Format gambar tidak valid',
                ],
            ],
        ];

        // =====================
        // JALANKAN VALIDASI
        // =====================
        if (! $this->validate($rules)) {
            return redirect()->to("/project/edit/$id")
                ->withInput()
                ->with('validation', $this->validator);
        }

        // =====================
        // UPLOAD GAMBAR (OPSIONAL)
        // =====================
        $file = $this->request->getFile('gambar');

        if ($file && $file->isValid() && ! $file->hasMoved()) {
            $fileName = $file->getRandomName();
            $file->move(WRITEPATH . 'uploads', $fileName);

            // hapus gambar lama
            if ($project['gambar'] && file_exists(WRITEPATH . 'uploads/' . $project['gambar'])) {
                unlink(WRITEPATH . 'uploads/' . $project['gambar']);
            }
        } else {
            $fileName = $project['gambar'];
        }

        // =====================
        // UPDATE DATABASE
        // =====================
        $namaProject = $this->request->getVar('nama_project');

        $this->projectModel->update($id, [
            'nama_project' => $namaProject,
            'slug'         => url_title($namaProject, '-', true),
            'deskripsi'    => $this->request->getVar('deskripsi'),
            'gambar'       => $fileName,
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diupdate');
        return redirect()->to('/project');
    }
}

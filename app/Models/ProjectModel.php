<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model
{

    protected $table = 'project';
    protected $useTimestamps = false;
    protected $allowedFields = ['judul', 'slug', 'deskripsi', 'gambar'];
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model
{
    protected $table      = 'project';
    protected $primaryKey = 'id'; 

    protected $allowedFields = [
        'nama_project',
        'slug',
        'deskripsi',
        'gambar'
    ];
}

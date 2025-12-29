<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        // Membuat instance Faker
        $faker = Factory::create();

        // Loop untuk generate 10 data dummy
        for ($i = 0; $i < 10; $i++) {
            $data = [
                'nama_project' => $faker->sentence(3),           // Nama project random
                'slug' => url_title($faker->sentence(3), '-', true), // Slug dari nama project
                'deskripsi' => $faker->paragraph(),              // Deskripsi random
                'gambar' => 'default.png',                                // Bisa diisi nama file dummy jika mau
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];

            // Masukkan data ke tabel project
            $this->db->table('project')->insert($data);
        }
    }
}

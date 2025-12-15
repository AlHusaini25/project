<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' =>'Home | AlFachri',
            'tes' => ['satu', 'dua', 'tiga']
        ]; 
      
        return view('pages/home', $data);

    }

    public function about()
    {
         $data = [
            'title' =>'About Me | AlFachri'
        ];
       

        return view ('pages/about', $data);


    }

    public function contact() 
    {
         $data = [
            'title' =>'Contact | AlFachri'
            'alamat' => [
                'tipe' => 'Rumah',
                'alamat' => 'Jl. Serma Marjuki No. 12',
                'kota' => 'Bekasi'
            ],
         [
            'tipe' => 'Sekolah'
            'alamat' => 'Jl'
         ]
        ];  

           return view ('pages/contact', $data);
    }

}

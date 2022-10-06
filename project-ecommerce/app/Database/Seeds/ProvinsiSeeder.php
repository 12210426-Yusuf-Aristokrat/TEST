<?php

namespace App\Database\Seeds;

use App\Models\Provinsi as ModelsProvinsi;
use CodeIgniter\Database\Seeder;

class Provinsi extends Seeder
{
    public function run()
    {
        $id = (new ModelsProvinsi()) ->insert([
            'kode' => '76011',
            'nama' => 'Kalimantan Barat',
         
        ]);
            //
    }
}

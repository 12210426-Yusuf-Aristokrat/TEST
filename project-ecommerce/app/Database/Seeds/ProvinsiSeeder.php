<?php

namespace App\Database\Seeds;

use App\Models\ProvinsiModel as ProvinsiModel;
use CodeIgniter\Database\Seeder;

class Provinsiseeder extends Seeder
{
    public function run()
    {
        $id = (new ProvinsiModel()) ->insert([
            'kode' => '76011',
            'nama' => 'Kalimantan Barat',
         
        ]);
            //
    }
}

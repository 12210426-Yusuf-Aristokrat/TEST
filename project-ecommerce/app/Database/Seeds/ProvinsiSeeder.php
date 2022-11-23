<?php

namespace App\Database\Seeds;

use App\Models\ProvinsiModel as ProvinsiModel;
use CodeIgniter\Database\Seeder;

class Provinsiseeder extends Seeder
{
    public function run()
    {
        $id = (new ProvinsiModel()) ->insert([
            'kode' => '61',
            'nama' => 'Kalimantan Barat',
         
        ]);
        // $id = (new ProvinsiModel()) ->insert([
        //     'kode' => '62',
        //     'nama' => 'Kalimantan Tengah',
         
        // ]);
        // $id = (new ProvinsiModel()) ->insert([
        //     'kode' => '63',
        //     'nama' => 'Kalimantan Selatan',
         
        // ]);
        echo "id = $id";
            //
    }
}

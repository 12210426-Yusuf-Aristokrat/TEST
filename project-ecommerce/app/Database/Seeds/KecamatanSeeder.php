<?php

namespace App\Database\Seeds;

use App\Models\KecamatanModel as KecamatanModel;
use CodeIgniter\Database\Seeder;

class KecamatanSeeder extends Seeder
{
    public function run()
    {
        $id = (new KecamatanModel ()) ->insert([
            'kode'=> '1234',
            'nama'=> 'Pontianak Barat',
        ]);
        //
    }
}

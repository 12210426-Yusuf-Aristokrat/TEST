<?php

namespace App\Database\Seeds;

use App\Database\Migrations\Kabko;
use App\Models\KecamatanModel as KecamatanModel;
use CodeIgniter\Database\Seeder;

class KecamatanSeeder extends Seeder
{
    public function run()
    {
        $id = (new KecamatanModel ()) ->insert([
            'kode'=> '6171010',
            'nama'=> 'Pontianak Selatan',
            'kabko_id'=> '1'
        ]);
        echo "id = $id";
        //
    }
}

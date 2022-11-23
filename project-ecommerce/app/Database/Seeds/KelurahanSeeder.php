<?php

namespace App\Database\Seeds;

use App\Models\KelurahanModel as KelurahanModel;
use CodeIgniter\Database\Seeder;

class Kelurahanseeder extends Seeder
{
    public function run()
    {
        $id = (new KelurahanModel()) ->insert([
            'kode'=> '6171010006',
            'nama'=> 'Kota Baru',
            'kecamatan_id'=> '2'
        ]);
        echo "id = $id";
        //
    }
}

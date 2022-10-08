<?php

namespace App\Database\Seeds;

use App\Models\KelurahanModel as KelurahanModel;
use CodeIgniter\Database\Seeder;

class Kelurahanseeder extends Seeder
{
    public function run()
    {
        $id = (new KelurahanModel()) ->insert([
            'kode'=> '78234',
            'nama'=> 'Tambelan Sampit',
        ]);
        //
    }
}

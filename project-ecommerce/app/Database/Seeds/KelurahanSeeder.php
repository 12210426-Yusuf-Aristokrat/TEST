<?php

namespace App\Database\Seeds;

use App\Models\Kelurahan as ModelsKelurahan;
use CodeIgniter\Database\Seeder;

class Kelurahan extends Seeder
{
    public function run()
    {
        $id = (new ModelsKelurahan ()) ->insert([
            'kode'=> '78234',
            'nama'=> 'Tambelan Sampit',
        ]);
        //
    }
}

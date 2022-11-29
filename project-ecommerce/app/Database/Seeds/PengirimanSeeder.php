<?php

namespace App\Database\Seeds;

use App\Models\PengirimanModel;
use CodeIgniter\Database\Seeder;

class PengirimanSeeder extends Seeder
{
    public function run()
    {
        $id = (new PengirimanModel()) ->insert([
            'id'=> '3',
            'kurir_id' =>'1',
            'no_resi'=> '1983123613713',
            'tgl_krm'=> '2022-11-22',
            'tgl_trma'=> '2022-11-27',
        ]);
        echo "id = $id";
    }
}

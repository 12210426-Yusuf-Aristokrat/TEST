<?php

namespace App\Database\Seeds;

use App\Models\AlamatPelangganModel;
use CodeIgniter\Database\Seeder;

class AlamatPelangganSeeder extends Seeder
{
    public function run()
    {
        $id=(new AlamatPelangganModel())->insert([
            'pelanggan_id'  =>'1',
            'judul'         =>'rumah',
            'alamat'        =>'jalan perdamaian 1 no.10',
            'provinsi_id'   =>'1',
            'kabko_id'      =>'1',
            'kecamatan_id'  =>'2',
            'kelurahan_id'  =>'2',
            'kodepos'       =>'78121'
        ]);
        echo "id = $id";
    }
}

<?php

namespace App\Database\Seeds;

use App\Models\DetailPemesananModel;
use CodeIgniter\Database\Seeder;

class DetailPemesananSeeder extends Seeder
{
    public function run()
    {
        $id = (new DetailPemesananModel()) ->insert([
            'pemesanan_id' => '3',
            'varian_produk_id'=> '1',
            'qty'=>  '1',
            'harga_jual'=>  '15000000',
            'harga_perolehan'=>  '5500000',
            'catatan'=>  'cuan',
        ]);
        echo "id = $id";
    }
}

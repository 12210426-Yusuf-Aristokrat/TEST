<?php

namespace App\Database\Seeds;

use App\Models\KeranjangModel;
use CodeIgniter\Database\Seeder;

class KeranjangSeeder extends Seeder
{
    public function run()
    {
        $id = (new KeranjangModel()) ->insert([
            'pelanggan_id' => '1',
            'varian_produk_id'=>  '1',
            'qty'=>  '1',
            'harga_jual'=>  'RP 15.000.000',
            'catatan'=>  'Terjual Kepada Pak Mamat',
        ]);
        echo "id = $id";
    }
}

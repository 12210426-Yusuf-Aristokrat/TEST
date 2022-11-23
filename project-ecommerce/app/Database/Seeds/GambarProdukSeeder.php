<?php

namespace App\Database\Seeds;

use App\Models\GambarProdukModel;
use CodeIgniter\Database\Seeder;

class GambarProdukSeeder extends Seeder
{
    public function run()
    {
        $id = (new GambarProdukModel()) ->insert([
            'varian_produk_id' => '1',
            'gambar'=>  'laptop_tapir_asoes.jpg',
            'keterangan'=>  'laptop tapir asoes',
        ]);
        echo "id = $id";
    }
}

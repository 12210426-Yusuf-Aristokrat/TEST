<?php

namespace App\Database\Seeds;

use App\Models\ProdukModel;
use CodeIgniter\Database\Seeder;

class ProdukSeeder extends Seeder
{
    public function run()
    {
        $id = (new ProdukModel()) ->insert([
            'mitra_id'  =>'2',
            'detail_produk'=>'laptop tapir asoes',
            'rating'=>'6.9',
            'aktif'=>'Y',
            'kategori_produk_id'=>'1',
        ]);
        echo "id = $id";
    }
}

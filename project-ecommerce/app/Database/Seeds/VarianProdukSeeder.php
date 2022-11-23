<?php

namespace App\Database\Seeds;

use App\Models\VarianProdukModel;
use CodeIgniter\Database\Seeder;

class VarianProdukSeeder extends Seeder
{
    public function run()
    {
        $id = (new VarianProdukModel()) ->insert([
            'produk_id'     => '1',
            'varian'        =>  'asoes',
            'stok'          =>  '20',
            'harga_jual'    =>  '15000000',
            'harga_dasar'   =>  '9500000'
        ]);
        echo "id = $id";
    }
}

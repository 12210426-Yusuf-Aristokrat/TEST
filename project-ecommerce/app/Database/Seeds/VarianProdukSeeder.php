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
            'harga_jual'    =>  'RP.15.000.000',
            'harga_dasar'   =>  'RP.9.500.000'
        ]);
        echo "id = $id";
    }
}

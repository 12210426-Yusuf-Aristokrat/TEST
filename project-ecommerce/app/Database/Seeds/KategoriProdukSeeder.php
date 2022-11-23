<?php

namespace App\Database\Seeds;

use App\Models\KategoriProdukModel;
use CodeIgniter\Database\Seeder;

class KategoriProdukSeeder extends Seeder
{
    public function run()
    {
        $id = (new KategoriProdukModel()) ->insert([
            'kategori'=> 'elektronik',
            'parent_id'=> '1',
            'aktif'=> 'Y'
        ]);
        echo "id = $id";
    }
}

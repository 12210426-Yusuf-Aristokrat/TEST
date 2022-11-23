<?php

namespace App\Database\Seeds;

use App\Models\KurirModel;
use CodeIgniter\Database\Seeder;

class KurirSeeder extends Seeder
{
    public function run()
    {
        $id = (new KurirModel()) ->insert([
            'kurir' => 'JNO',
            'keterangan'=>  'Sedang Melaju Cepat'
        ]);
        echo "id = $id";
    }
}

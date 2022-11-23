<?php

namespace App\Database\Seeds;

use App\Models\MetodeBayarModel;
use CodeIgniter\Database\Seeder;

class MetodeBayarSeeder extends Seeder
{
    public function run()
    {
        $id = (new MetodeBayarModel()) ->insert([
            'metode'  =>'Tunai',
            'aktif'     =>'Y',
        ]);
        echo "id = $id";
    }
}

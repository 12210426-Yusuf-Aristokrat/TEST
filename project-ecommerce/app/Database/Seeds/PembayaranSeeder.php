<?php

namespace App\Database\Seeds;

use App\Models\PembayaranModel;
use CodeIgniter\Database\Seeder;

class PembayaranSeeder extends Seeder
{
    public function run()
    {
        $id = (new PembayaranModel()) ->insert([
            'metode_bayar_id'=>  '1',
            'dibayar_oleh'=>  'ujang',
            'nominal_bayar' => '15000000',
            'verifikasi'=>  'Y',
            'sysadmin_id'=>  '1'
        ]);
        echo "id = $id";
    }
}

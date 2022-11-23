<?php

namespace App\Database\Seeds;

use App\Models\PemesananModel;
use CodeIgniter\Database\Seeder;

class PemesananSeeder extends Seeder
{
    public function run()
    {
        $id = (new PemesananModel()) ->insert([
            'no_invoice' => '19123837283',
            'pelanggan_id'=>  '1',
            'mitra_id'=>  '1',
            'alamat_pelanggan_id'=>  '1',
            'total_harga'=>  '15.500.000',
            'ongkos_kirim'=>  '50.000',
            'biaya_jasa'=>  '450.000'
        ]);
        echo "id = $id";
    }
}

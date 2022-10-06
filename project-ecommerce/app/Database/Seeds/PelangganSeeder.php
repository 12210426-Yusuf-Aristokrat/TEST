<?php

namespace App\Database\Seeds;

use App\Models\Pelanggan as ModelsPelanggan;
use CodeIgniter\Database\Seeder;

class Pelanggan extends Seeder
{
    public function run()
    {
        $id = (new ModelsPelanggan()) ->insert([
            'nama' => 'Administrator',
            'gender' => 'L',
            'email' => '12210430@.bsi.ac.id',
            'sandi' => password_hash('123456', PASSWORD_BCRYPT),

        ]);
        //
    }
}

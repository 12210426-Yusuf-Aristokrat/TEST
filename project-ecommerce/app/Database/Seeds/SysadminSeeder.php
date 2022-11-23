<?php

namespace App\Database\Seeds;

use App\Models\SysadminModel;
use CodeIgniter\Database\Seeder;

class SysadminSeeder extends Seeder
{
    public function run()
    {
        $id = (new SysadminModel()) ->insert([
            'nama_lengkap'  =>'ujang',
            'email'         =>'ujang@gmail.com',
            'sandi'         =>password_hash('123456', PASSWORD_BCRYPT),
            'token_reset'   =>'ekwjnfius23',
            'notelp'        =>'08129389728',
            'aktif'         =>'Y',
            'foto'          =>'ujang.jpg'
        ]);
        echo "id = $id";
    }
}

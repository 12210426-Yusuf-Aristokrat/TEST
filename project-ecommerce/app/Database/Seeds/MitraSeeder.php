<?php

namespace App\Database\Seeds;

use App\Models\MitraModel;
use CodeIgniter\Database\Seeder;

class MitraSeeder extends Seeder
{
    public function run()
    {
        $id = (new MitraModel()) ->insert([
            'nama_mitra'    =>'zeroElectronik',
            'alamat'        =>'pontianak',
            'provinsi_id'   =>'1',
            'kabko_id'      =>'1',
            'kecamatan_id'  =>'1',
            'kelurahan_id'  =>'2',
            'email'         =>'zeroelectro@gmail.com',
            'nohp'          =>'9182301',
            'sandi'         =>password_hash('123456', PASSWORD_BCRYPT),
            'token_reset'   =>'mmWwq123@q',
            'aktif'         =>'Y',
            'foto'          =>'zero.jpg',
        ]);
        echo "id = $id";
    }
}

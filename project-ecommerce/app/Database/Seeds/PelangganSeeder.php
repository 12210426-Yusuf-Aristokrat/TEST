<?php

namespace App\Database\Seeds;

use App\Models\PelangganModel as PelangganModel;
use CodeIgniter\Database\Seeder;

class PelangganSeeder extends Seeder
{
    public function run()
    {
        
        $id = (new PelangganModel()) ->insert([
            'nama_depan'=>'budi',
            'nama_belakang'=>"tomo",
            'gender'=>'L',
            'nohp'=>"09039423848",
            'email'=>'buditomo@gmail.com',
            'sandi'=> password_hash('12345',PASSWORD_BCRYPT),
            'tgl_daftar'=>'2022-09-11',
            'token_reset'=>'knjshduhw',
            'foto'=>'budi.jpg'
        ]);
        echo "id = $id";
    }
}

<?php

    namespace App\Database\Seeds;

    use App\Models\KabkoModel as KabkoModel;
    use CodeIgniter\Database\Seeder;

    class KabkoSeeder extends Seeder
    {
        public function run()
        {
            $id = (new KabkoModel()) ->insert([
            'kode'=> '1234',
            'nama' => 'Pontianak',
        ]);    
            //
        }
    }

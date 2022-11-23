<?php

    namespace App\Database\Seeds;

    use App\Models\KabkoModel as KabkoModel;
    use CodeIgniter\Database\Seeder;

    class KabkoSeeder extends Seeder
    {
        public function run()
        {
            $id = (new KabkoModel()) ->insert([
                'kode'=> '6171',
                'nama' => 'Kota Pontianak',
                'provinsi_id'=> '1'
            ]);    
            echo "id = $id";
        }
    }

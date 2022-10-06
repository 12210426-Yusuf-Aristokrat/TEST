<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mitra extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'        =>['type'=>'int', 'constraint'=>10, 'null'=>true, 'unsigned'=>true, 'auto_increment'=>true],
            'nama_mitra'=>['type'=>'varchar', 'constraint'=>128, 'null'=>true],
            'alamat'    =>['type'=>'varchar', 'constraint'=>255, 'null'=>true],
            'provinsi_id'=>['type'=>'int', 'constraint'=>10, 'unsigned'=>true],
            'kabko_id'  =>['type'=>'int', 'constraint'=>10, 'unsigned'=>true],
            'kecamatan_id'  =>['type'=>'int', 'constraint'=>10, 'unsigned'=>true],
            'kelurahan_id'  =>['type'=>'int', 'constraint'=>10, 'unsigned'=>true],
        ]);
    }

    public function down()
    {
        //
    }
}

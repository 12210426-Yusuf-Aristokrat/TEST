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
            'email'         =>['type'=>'varchar', 'constraint'=>255],
            'nohp'         =>['type'=>'varchar', 'constraint'=>16],
            'sandi'         =>['type'=>'varchar', 'constraint'=>60],
            'token_reset'         =>['type'=>'varchar', 'constraint'=>10],
            'aktif'         =>['type'=>'enum("Y", "T")'],
            'foto'          =>['type'=>'varchar', 'constraint'=>255],
            'created_at'   =>['type'=>'datetime'],
            'updated_at'   =>['type'=>'datetime'],
            'deleted_at'   =>['type'=>'datetime']
        ]);
    }

    public function down()
    {
        //
    }
}

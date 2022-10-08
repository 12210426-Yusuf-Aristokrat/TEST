<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pelanggan extends Migration
{
    public function up()
    { 
        $this->forge->addField([
            'id'=> [ 'type'=>'int', 'constraint'=>10,'null'=>true, 'unsigned'=>true, 'auto_increment'=>true],
            'nama_depan'=>[ 'type'=>'varchar', 'constraint'=>50, 'null'=>true],
            'nama_belakang'=>[ 'type'=>'varchar', 'constraint'=>50],
            'gender'=>[ 'type'=>'enum("L","P")'],
            'nohp'=>[ 'type'=>'varchar', 'constraint'=>16],
            'email'=>[ 'type'=>'varchar', 'constraint'=>128],
            'sandi'=>[ 'type'=>'varchar', 'constraint'=>60],
            'tgl_daftar'=>[ 'type'=>'date'],
            'token_reset'=>[ 'type'=>'varchar', 'constraint'=>10],
            'foto'=>[ 'type'=>'varchar', 'constraint'=>255],
            'created_at'=>['type'=>'datetime'],
            'updated_at'=>['type'=>'datetime'],
            'deleted_at'=>['type'=>'datetime']
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('Pelanggan');
    }

    public function down()
    {
        $this->forge->dropTable('Pelanggan');
    }
}

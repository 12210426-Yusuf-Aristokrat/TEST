<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pelanggan extends Migration
{
    public function up()
    { 
        $this->forge->addField([
            'id'=> [ 'type'=>'int', 'constraint'=>10, 'primary key'=>true, 'not null'=>true, 'unsigned'=>true, 'auto_increment'=>true],
            'nama_depan'=>[ 'type'=>'varchar', 'constrain'=>50, 'not null'=>true],
            'nama_belakang'=>[ 'type'=>'varchar', 'constrain'=>50],
            'gender'=>[ 'type'=>'varchar', 'constrain'=> 'L','P'],
            'nohp'=>[ 'type'=>'varchar', 'constrain'=>16],
            'email'=>[ 'type'=>'varchar', 'constrain'=>128],
            'sandi'=>[ 'type'=>'varchar', 'constrain'=>60],
            'tgl_daftar'=>[ 'type'=>'date'],
            'token_reset'=>[ 'type'=>'varchar', 'constrain'=>10],
            'foto'=>[ 'type'=>'varchar', 'constrain'=>255],
            'created_at'=>['type'=>'datetime'],
            'update_at'=>['type'=>'datetime'],
            'delete_at'=>['type'=>'datetime'],
        ]);
        //
    }

    public function down()
    {
        //
    }
}

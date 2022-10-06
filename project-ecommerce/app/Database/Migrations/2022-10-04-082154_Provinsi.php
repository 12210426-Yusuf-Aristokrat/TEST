<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Provinsi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=> [ 'type'=>'int', 'constraint'=>10, 'primary key'=>true, 'not null'=>true, 'unsigned'=>true, 'auto_increment'=>true],
            'kode'=> [ 'type'=>'varchar', 'constrain'=>10],
            'nama'=> [ 'type'=> 'varchar', 'constrain'=>100, 'not null'=>true],
        ]);
        //
    }

    public function down()
    {
        //
    }
}

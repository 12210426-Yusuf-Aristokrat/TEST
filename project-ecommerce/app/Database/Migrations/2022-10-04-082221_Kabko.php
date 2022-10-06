<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kabko extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=> [ 'type'=>'int', 'constraint'=>10, 'primary key'=>true, 'not null'=>true, 'unsigned'=>true, 'auto_increment'=>true],
            'kode'=> [ 'type'=>'varchar', 'constrain'=>10],
            'nama'=> [ 'type'=> 'varchar', 'constrain'=>100, 'not null'=>true],
            'provinsi_id'=> [ 'type'=>'int', 'constrain'=>10, 'not null'=>true, 'Unsigned'=>true],
        ]);  
        //
    }

    public function down()
    {
        //
    }
}

<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Provinsi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=> [ 'type'=>'int', 'constraint'=>10, 'null'=>true, 'unsigned'=>true, 'auto_increment'=>true],
            'kode'=> [ 'type'=>'varchar', 'constraint'=>10],
            'nama'=> [ 'type'=> 'varchar', 'constraint'=>100, 'not null'=>true],
            'created_at'=>['type'=>'datetime'],
            'updated_at'=>['type'=>'datetime'],
            'deleted_at'=>['type'=>'datetime']
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('Provinsi');
    }

    public function down()
    {
        $this->forge->dropTable('Provinsi');
    }
}

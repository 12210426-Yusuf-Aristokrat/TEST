<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kecamatan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=> [ 'type'=>'int', 'constraint'=>10,  'null'=>true, 'unsigned'=>true, 'auto_increment'=>true],
            'kode'=> [ 'type'=>'varchar', 'constraint'=>10],
            'nama'=> [ 'type'=> 'varchar', 'constraint'=>100, 'null'=>true],
            'kabko_id'=> [ 'type'=> 'int', 'constraint'=>10, 'null'=>true, 'Unsigned'=>true],
            'created_at'=>['type'=>'datetime'],
            'updated_at'=>['type'=>'datetime'],
            'deleted_at'=>['type'=>'datetime']
        ]);    
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('tb_kecamatan');
    }

    public function down()
    {
        $this->forge->dropTable('tb_kecamatan');
    }
}

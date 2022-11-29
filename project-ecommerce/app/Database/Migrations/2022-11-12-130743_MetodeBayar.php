<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MetodeBayar extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'        =>['type'=>'int', 'constraint'=>10, 'null'=>true, 'unsigned'=>true, 'auto_increment'=>true],
            'metode'  =>['type'=>'varchar', 'constraint'=>100],
            'aktif'     =>['type'=>'enum("Y","T")'],
            'created_at'   =>['type'=>'datetime'],
            'updated_at'   =>['type'=>'datetime'],
            'deleted_at'   =>['type'=>'datetime']
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('tb_metode_bayar');
    }

    public function down()
    {
        $this->forge->dropTable('tb_metode_bayar');
        
    }
}

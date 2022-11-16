<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kurir extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=> [ 'type'=>'int', 'constraint'=>10, 'unsigned' =>true, 'auto_increment'=>true ],
            'kurir' => ['type'=>'varchar', 'constraint'=>100, 'null'=>true],
            'keterangan'=> [ 'type'=>'text','null'=>true ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('tb_kurir');
    }

    public function down()
    {
        $this->forge->dropTable('tb_kurir');
        
    }
}

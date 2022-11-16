<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Sysadmin extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=> [ 'type'=>'int', 'constraint'=>10, 'unsigned' =>true, 'auto_increment'=>true ],
            'nama_lengkap' => ['type'=>'varchar', 'constraint'=>100, 'null'=>false],
            'email'=> [ 'type'=>'varchar', 'constraint'=>127, 'null'=>true ],
            'sandi'=> [ 'type'=>'varchar','constraint'=>80, 'null'=>true ],
            'token_reset'=> [ 'type'=>'varchar','constraint'=>10,'null'=>true ],
            'notelp'=> [ 'type'=>'varchar','constraint'=>16,    'null'=>true ],
            'aktif'=> [ 'type'=>'enum("Y", "T")','null'=>true ],
            'foto'=> [ 'type'=>'varchar','constraint'=>255,'null'=>true ],
            'created_at' => [ 'type'=>'datetime','null'=>true ],
            'updated_at'=> [ 'type' =>'datetime','null'=>true ],
            'deleted_at'=> [ 'type' => 'datetime','null'=>true ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('tb_sysadmin');
    }

    public function down()
    {
        $this->forge->dropTable('tb_sysadmin');
        
    }
}

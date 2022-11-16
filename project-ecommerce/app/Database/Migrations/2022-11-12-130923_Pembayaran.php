<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pembayaran extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=> [ 'type'=>'int', 'constraint'=>10, 'unsigned' =>true, 'auto_increment'=>true ],
            'metode_bayar_id'=> [ 'type'=>'int', 'constraint'=>10,'unsigned' =>true, 'null'=>false ],
            'dibayar_oleh'=> [ 'type'=>'varchar','constraint'=>255,'null'=>true ],
            'nominal_bayar' => ['type'=>'double','default'=> 0 ,'unsigned' =>true, 'null'=>true],
            'verifikasi'=> [ 'type'=>'enum("Y", "T")','default'=> "T" , 'null'=>true ],
            'sysadmin_id'=> [ 'type'=>'int','constraint'=>10, 'null'=>true ],
            'created_at' => [ 'type'=>'datetime','null'=>true ],
            'updated_at'=> [ 'type' =>'datetime','null'=>true ],
            'deleted_at'=> [ 'type' => 'datetime','null'=>true ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('tb_pembayaran');
    }

    public function down()
    {
        $this->forge->createTable('tb_pembayaran');
        
    }
}

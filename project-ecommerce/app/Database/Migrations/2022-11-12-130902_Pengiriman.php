<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pengiriman extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=> [ 'type'=>'int', 'constraint'=>10, 'unsigned' =>true, 'auto_increment'=>false ],
            'kurir_id' => ['type'=>'int', 'constraint'=>10,'unsigned' =>true],
            'no_resi'=> [ 'type'=>'varchar', 'constraint'=>250, 'null'=>false ],
            'tgl_krm'=> [ 'type'=>'datetime','null'=>true],
            'tgl_trma'=> [ 'type'=>'datetime','null'=>true],
            
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addforeignKey('kurir_id', 'tb_kurir', 'id', 'cascade');
        $this->forge->addforeignKey('id', 'tb_pemesanan', 'id', 'cascade');
        $this->forge->createTable('tb_pengiriman');
    }

    public function down()
    {
        $this->forge->dropTable('tb_pengiriman'); 
    }
}

<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pemesanan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=> [ 'type'=>'int', 'constraint'=>10, 'unsigned' =>true, 'auto_increment'=>true ],
            'no_invoice' => ['type'=>'varchar', 'constraint'=>60, 'null'=>true],
            'pelanggan_id'=> [ 'type'=>'int', 'constraint'=>10,'unsigned'=>true, 'null'=>true ],
            'mitra_id'=> [ 'type'=>'int','constraint'=>10,'unsigned'=>true, 'null'=>true ],
            'alamat_pelanggan_id'=> [ 'type'=>'int','constraint'=>10,'unsigned'=>true, 'null'=>true ],
            'total_harga'=> [ 'type'=>'double','default'=> 0 ,'null'=>true ],
            'ongkos_kirim'=> [ 'type'=>'double','default'=> 0 ,'null'=>true ],
            'biaya_jasa'=> [ 'type'=>'double','default'=> 0 ,'null'=>true ],
            'created_at' => [ 'type'=>'datetime','null'=>true ],
            'updated_at'=> [ 'type' =>'datetime','null'=>true ],
            'deleted_at'=> [ 'type' => 'datetime','null'=>true ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addforeignKey('pelanggan_id', 'tb_pelanggan', 'id', 'cascade');
        $this->forge->addforeignKey('mitra_id', 'tb_mitra', 'id', 'cascade');
        $this->forge->addforeignKey('alamat_pelanggan_id', 'tb_alamat_pelanggan', 'id', 'cascade');
        $this->forge->createTable('tb_pemesanan');
    }

    public function down()
    {
        $this->forge->dropTable('tb_pemesanan');
        
    }
}

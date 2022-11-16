<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DetailPemesanan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=> [ 'type'=>'int', 'constraint'=>10, 'unsigned' =>true, 'auto_increment'=>true ],
            'pemesanan_id' => ['type'=>'int', 'constraint'=>10,'unsigned' =>true, 'null'=>true],
            'varian_produk_id'=> [ 'type'=>'int', 'constraint'=>10,'unsigned' =>true, 'null'=>false ],
            'qty'=> [ 'type'=>'int','constraint'=>10,'default'=> 0 , 'null'=>true ],
            'harga_jual'=> [ 'type'=>'double','default'=> 0 ,'null'=>true ],
            'harga_perolehan'=> [ 'type'=>'double','default'=> 0 ,'null'=>true ],
            'catatan'=> [ 'type'=>'text' ,'null'=>true ],
            'created_at' => [ 'type'=>'datetime','null'=>true ],
            'updated_at'=> [ 'type' =>'datetime','null'=>true ],
            'deleted_at'=> [ 'type' => 'datetime','null'=>true ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addforeignKey('pemesanan_id', 'tb_pemesanan', 'id', 'cascade');
        $this->forge->addforeignKey('varian_produk_id', 'tb_varian_produk', 'id', 'cascade');
        $this->forge->createTable('tb_detail_pemesanan');
    }

    public function down()
    {
        $this->forge->dropTable('tb_detail_pemesanan');
        
    }
}

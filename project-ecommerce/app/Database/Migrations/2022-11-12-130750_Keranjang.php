<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Keranjang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=> [ 'type'=>'int', 'constraint'=>10, 'unsigned'=>true, 'auto_increment'=>true ],
            'pelanggan_id' => ['type'=>'int', 'constraint'=>10,'unsigned' =>true, 'null'=>true],
            'varian_produk_id'=> [ 'type'=>'int', 'constraint'=>10,'unsigned' =>true, 'null'=>true ],
            'qty'=> [ 'type'=>'varchar','constraint'=>80, 'null'=>true ],
            'harga_jual'=> [ 'type'=>'double','null'=>true ],
            'catatan'=> [ 'type'=>'text','null'=>true ],
            'created_at' => [ 'type'=>'datetime','null'=>true ],
            'updated_at'=> [ 'type' =>'datetime','null'=>true ],
            'deleted_at'=> [ 'type' => 'datetime','null'=>true ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addforeignKey('pelanggan_id', 'tb_pelanggan', 'id', 'cascade');
        $this->forge->addforeignKey('varian_produk_id', 'tb_varian_produk', 'id', 'cascade');
        $this->forge->createTable('tb_keranjang');
    }

    public function down()
    {
        $this->forge->dropTable('tb_keranjang');
        
    }
}

<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class GambarProduk extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=> [ 'type'=>'int', 'constraint'=>10, 'unsigned' =>true, 'auto_increment'=>true ],
            'varian_produk_id' => ['type'=>'int', 'constraint'=>10,'unsigned' =>true, 'null'=>true],
            'gambar'=> [ 'type'=>'varchar', 'constraint'=>255, 'null'=>false ],
            'keterangan'=> [ 'type'=>'text', 'null'=>true ],
            'created_at' => [ 'type'=>'datetime','null'=>true ],
            'updated_at'=> [ 'type' =>'datetime','null'=>true ],
            'deleted_at'=> [ 'type' => 'datetime','null'=>true ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addforeignKey('varian_produk_id', 'tb_varian_produk', 'id', 'cascade');
        $this->forge->createTable('tb_gambar_produk');
    }

    public function down()
    {
        $this->forge->dropTable('tb_gambar_produk');
    }
}

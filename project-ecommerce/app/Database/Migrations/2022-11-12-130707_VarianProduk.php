<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class VarianProduk extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=> [ 'type'=>'int', 'constraint'=>10, 'unsigned' =>true, 'auto_increment'=>true ],
            'produk_id' => ['type'=>'int', 'constraint'=>10,'unsigned' =>true, 'null'=>true],
            'varian'=> [ 'type'=>'varchar', 'constraint'=>255, 'null'=>true ],
            'stok'=> [ 'type'=>'int', 'default'=> 0 ,'constraint'=>10, 'null'=>true ],
            'harga_jual'=> [ 'type'=>'double','null'=>true ],
            'harga_dasar'=> [ 'type'=>'double','null'=>true ],
            'created_at' => [ 'type'=>'datetime','null'=>true ],
            'updated_at'=> [ 'type' =>'datetime','null'=>true ],
            'deleted_at'=> [ 'type' => 'datetime','null'=>true ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addforeignKey('produk_id', 'tb_produk', 'id', 'cascade');
        $this->forge->createTable('tb_varian_produk');
    }

    public function down()
    {
        $this->forge->dropTable('tb_varian_produk');
        
    }
}

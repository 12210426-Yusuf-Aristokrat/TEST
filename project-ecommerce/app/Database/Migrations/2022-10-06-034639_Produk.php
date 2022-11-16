<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produk extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'        =>['type'=>'int', 'constraint'=>10, 'null'=>true, 'unsigned'=>true, 'auto_increment'=>true],
            'mitra_id'  =>['type'=>'int', 'constraint'=>10, 'null'=>true, 'unsigned'=>true],
            'detail_produk'=>['type'=>'mediumtext'],
            'rating'=>['type'=>'double', 'null'=>true, 'unsigned'=>true],
            'aktif'=>['type'=>'enum("Y", "T")'],
            'kategori_produk_id'=>['type'=>'int', 'constraint'=>10, 'null'=>true, 'unsigned'=>true],
            'created_at'   =>['type'=>'datetime'],
            'updated_at'   =>['type'=>'datetime'],
            'deleted_at'   =>['type'=>'datetime']
        ]);
        $this->forge->addprimarykey('id');
        $this->forge->addforeignKey('mitra_id', 'tb_mitra', 'id', 'cascade');
        $this->forge->addforeignKey('kategori_produk_id', 'tb_kategori_produk', 'id', 'cascade');
        $this->forge->createTable('tb_produk');
    }
    // deleted 
    public function down()
    {
        $this->forge->dropTable('tb_produk');
    //
    }
}



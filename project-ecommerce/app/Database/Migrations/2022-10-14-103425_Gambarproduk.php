<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Gambarproduk extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            =>['type'=>'int', 'constraint'=>10, 'null'=>true, 'unsigned'=>true, 'auto_increment'=>true],
            'varian_produk' =>['type'=>'int', 'constraint'=>10, 'null'=>true, 'unsigned'=>true],
            'gambar'        =>['type'=>'varchar', 'constraint'=>255, 'null'=>true],
            'keterangan'    =>['type'=>'text'],
            'created_at'    =>['type'=>'datetime'],
            'updated_at'    =>['type'=>'datetime'],
            'deleted_at'    =>['type'=>'datetime']
        ]);
        $this->forge->addprimarykey('id');
        $this->forge->createTable('tb_gambar_produk');
    }
    
    public function down()
    {
        $this->forge->dropTable('tb_gambar_produk');
        //
    }
}

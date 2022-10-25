<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use PHPUnit\Framework\Constraint\Constraint;

class AlamatPelanggan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            =>['type'=>'int', 'constraint'=>10, 'null'=>true, 'unsigned'=>true, 'auto_increment'=>true],
            'pelanggan_id'  =>['type'=>'int', 'constraint'=>10, 'null'=>true, 'unsigned'=>true],
            'judul'         =>['type'=>'varchar', 'constraint'=>80, 'null'=>true],
            'alamat'        =>['type'=>'varchar', 'constraint'=>255, 'null'=>true],
            'provinsi_id'   =>['type'=>'int', 'constraint'=>10, 'unsigned'=>true],
            'kabko_id'      =>['type'=>'int', 'constraint'=>10, 'unsigned'=>true],
            'kecamatan_id'  =>['type'=>'int', 'constraint'=>10, 'unsigned'=>true],
            'kelurahan_id'  =>['type'=>'int', 'constraint'=>10, 'unsigned'=>true],
            'kodepos'       =>['type'=>'varchar', 'constraint'=>10],
            'created_at'    =>['type'=>'datetime'],
            'updated_at'    =>['type'=>'datetime'],
            'deleted_at'    =>['type'=>'datetime']

        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('tb_alamat_pelanggan');
    }
    
    public function down()
    {
        $this->forge->dropTable('tb_alamat_pelanggan');
        
    }
}

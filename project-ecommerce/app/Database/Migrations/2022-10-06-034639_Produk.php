<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produk extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'        =>['type'=>'int', 'constraint'=>10, 'null'=>true, 'unsigned'=>true, 'auto_increment'=>true],
            'mitra_id'  =>['type'=>'int', 'constraint'=>10, 'null'],
        ]);
    }

    public function down()
    {
        //
    }
}

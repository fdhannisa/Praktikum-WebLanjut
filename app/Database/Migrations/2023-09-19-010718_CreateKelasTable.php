<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKelasTable extends Migration
{
    // yang akan di jalankan
    public function up(){
        $this->forge->addField([
            'id' => [
                'type'          => 'INT',
                'constraint'    => 5,
                'unsign'        => true,
                'auto increment'=> true,
            ],
            'nama_kelas'    => [
                'type'      => 'VARCHAR',
                'constraint'    => '10'
            ],
            'created_at'    => [
                'type'      => 'DATETIME',
                'null'      => true,
            ],
            'update_at'     =>[
                'type'      => 'DATETIME',
                'null'      => true,
            ],
            'deleted_at'    => [
                'type'      => 'DATETIME',
                'null   '   => true,   
            ]
        ]);
        $this->forge->addKey('id', true, true);
        $this->forge->createTable('kelas');
        //
    }

    //kebalikan dari up
    public function down(){
        $this->forge->dropTable('kelas', true);
        //
    }
}
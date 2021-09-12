<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Webinar1 extends Migration
{
    public function up()
    {

        // Uncomment below if want config
        $this->forge->addField([
            'id'                  => [
                'type'           => 'INT',
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
            ],
            'nama'               => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'email'               => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'telp'               => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'ket'               => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'confim'               => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'created_at'               => [
                'type'           => 'DATETIME',
                'null'           => TRUE,
            ],
            'updated_at'               => [
                'type'           => 'DATETIME',
                'null'           => TRUE,
            ],
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('webinar1');
    }

    public function down()
    {
        $this->forge->dropTable('webinar1');
    }
}

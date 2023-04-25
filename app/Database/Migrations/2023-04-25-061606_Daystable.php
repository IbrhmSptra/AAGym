<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Daystable extends Migration
{
    public function up()
    {
        $field = [
            "id" => [
                'type' => 'INT',
                'unsigned' => true,
                "auto_increment" => true,
            ],
            "day" => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            "cal" => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
        ];
        $this->forge->addKey('id', true);
        $this->forge->addField($field);
        $this->forge->createTable('days', true);
    }

    public function down()
    {
        $this->forge->dropTable('days', true);
    }
}

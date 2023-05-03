<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DaysDone extends Migration
{
    public function up()
    {
        $field = [
            "id" => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            "day" => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ]
        ];
        $this->forge->addKey('id', true);
        $this->forge->addField($field);
        $this->forge->createTable('daysdone', true);
    }

    public function down()
    {
        $this->forge->dropTable('daysdone', true);
    }
}

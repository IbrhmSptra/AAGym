<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Workout extends Migration
{
    public function up()
    {
        $fieldworkout = [
            "id" => [
                'type' => 'INT',
                'unsigned' => true,
                "auto_increment" => true,
            ],
            "id_days" => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            "gerakan" => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            "waktu" => [
                'type' => 'INT',
                "null" => true,
                "default" => null,
            ],
            "repitisi" => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                "null" => true,
                "default" => null,
            ],
            "gif" => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                "null" => true,
                "default" => null,
            ]
        ];
        $this->forge->addKey('id', true);
        $this->forge->addField($fieldworkout);
        $this->forge->addForeignKey('id_days', 'days', 'id');
        $this->forge->createTable('workout', true); //If NOT EXISTS create table products
    }

    public function down()
    {
        $this->forge->dropTable('workout', true);
    }
}

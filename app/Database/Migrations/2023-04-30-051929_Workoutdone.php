<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Workoutdone extends Migration
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
            "id_workout" => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            "id_user" => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            "gerakan" => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
        ];
        $this->forge->addKey('id', true);
        $this->forge->addField($fieldworkout);
        $this->forge->addForeignKey('id_days', 'days', 'id');
        $this->forge->addForeignKey('id_workout', 'workout', 'id');
        $this->forge->createTable('workoutdone', true); //If NOT EXISTS create table products
    }

    public function down()
    {
        $this->forge->dropTable('workoutdone', true);
    }
}

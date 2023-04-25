<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DaysSeeder extends Seeder
{
    public function run()
    {
        //day 1
        $day1 = [
            'day' => 'Hari 1',
            'cal'    => '119',
        ];
        $this->db->table('days')->insert($day1);

        //day 2
        $day2 = [
            'day' => 'Hari 2',
            'cal'    => '132',
        ];
        $this->db->table('days')->insert($day2);

        //day 3
        $day3 = [
            'day' => 'Hari 3',
            'cal'    => '126',
        ];
        $this->db->table('days')->insert($day3);

        //day 4
        $day4 = [
            'day' => 'Hari 4',
            'cal'    => '120',
        ];
        $this->db->table('days')->insert($day4);

        //day 5
        $day5 = [
            'day' => 'Hari 5',
            'cal'    => '118',
        ];
        $this->db->table('days')->insert($day5);

        //day 6
        $day6 = [
            'day' => 'Hari 6',
            'cal'    => '128',
        ];
        $this->db->table('days')->insert($day6);

        //day 7
        $day7 = [
            'day' => 'Hari 7',
            'cal'    => '151',
        ];
        $this->db->table('days')->insert($day7);
    }
}

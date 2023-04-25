<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class WorkoutSeeder extends Seeder
{
    public function run()
    {
        //day 1
        $gerakan1 = [
            'id_days' => 1,
            'gerakan' => 'Pendaki Gunung',
            'waktu' => 60,
            'gif' => 'pendaki_gunung.gif'
        ];
        $this->db->table('workout')->insert($gerakan1);

        $gerakan2 = [
            'id_days' => 1,
            'gerakan' => 'Squat',
            'repitisi' => '16x',
            'gif' => 'squat.gif'
        ];
        $this->db->table('workout')->insert($gerakan2);

        $gerakan3 = [
            'id_days' => 1,
            'gerakan' => 'Angkat Lutut / Berlari',
            'repitisi' => '16x',
            'gif' => 'angkat_lutut.gif'
        ];
        $this->db->table('workout')->insert($gerakan3);

        $gerakan4 = [
            'id_days' => 1,
            'gerakan' => 'Plank',
            'waktu' => 60,
            'gif' => 'plank.jpg'
        ];
        $this->db->table('workout')->insert($gerakan4);

        $gerakan5 = [
            'id_days' => 1,
            'gerakan' => 'Push Up',
            'repitisi' => '12x',
            'gif' => 'push_up.gif'
        ];
        $this->db->table('workout')->insert($gerakan5);

        $gerakan6 = [
            'id_days' => 1,
            'gerakan' => 'Crunch Balik',
            'waktu' => 60,
            'gif' => 'crunch_balik.gif'
        ];
        $this->db->table('workout')->insert($gerakan6);

        $gerakan7 = [
            'id_days' => 1,
            'gerakan' => 'Plank',
            'waktu' => 60,
            'gif' => 'plank.jpg'
        ];
        $this->db->table('workout')->insert($gerakan7);

        $gerakan8 = [
            'id_days' => 1,
            'gerakan' => 'Peregangan kobra',
            'waktu' => 60,
            'gif' => 'peregangan_kobra.jpg'
        ];
        $this->db->table('workout')->insert($gerakan8);


        //day 2
        $gerakan1 = [
            'id_days' => 2,
            'gerakan' => 'Lompat Bintang',
            'waktu' => 60,
            'gif' => 'loncat_bintang.gif'
        ];
        $this->db->table('workout')->insert($gerakan1);

        $gerakan2 = [
            'id_days' => 2,
            'gerakan' => 'Pendaki Gunung',
            'waktu' => 60,
            'gif' => 'pendaki_gunung.gif'
        ];
        $this->db->table('workout')->insert($gerakan2);

        $gerakan3 = [
            'id_days' => 2,
            'gerakan' => 'Trincip Dip',
            'repitisi' => '16x',
            'gif' => 'trincip_dip.gif'
        ];
        $this->db->table('workout')->insert($gerakan3);

        $gerakan4 = [
            'id_days' => 2,
            'gerakan' => 'Plank',
            'waktu' => 60,
            'gif' => 'plank.jpg'
        ];
        $this->db->table('workout')->insert($gerakan4);

        $gerakan5 = [
            'id_days' => 2,
            'gerakan' => 'Crunch Sepeda',
            'repitisi' => '16x',
            'gif' => 'crunch_sepeda.gif'
        ];
        $this->db->table('workout')->insert($gerakan5);

        $gerakan6 = [
            'id_days' => 2,
            'gerakan' => 'Crunch Lengan Lurus',
            'repitisi' => '16x',
            'gif' => 'crunch_lengan_lurus.gif'
        ];
        $this->db->table('workout')->insert($gerakan6);

        $gerakan7 = [
            'id_days' => 2,
            'gerakan' => 'Plank',
            'waktu' => 60,
            'gif' => 'plank.jpg'
        ];
        $this->db->table('workout')->insert($gerakan7);

        $gerakan8 = [
            'id_days' => 2,
            'gerakan' => 'Peregangan kobra',
            'waktu' => 60,
            'gif' => 'peregangan_kobra.jpg'
        ];
        $this->db->table('workout')->insert($gerakan8);


        //day 3
        $gerakan1 = [
            'id_days' => 3,
            'gerakan' => 'Lompat Bintang',
            'waktu' => 60,
            'gif' => 'loncat_bintang.gif'
        ];
        $this->db->table('workout')->insert($gerakan1);

        $gerakan2 = [
            'id_days' => 3,
            'gerakan' => 'Pendaki Gunung',
            'waktu' => 60,
            'gif' => 'pendaki_gunung.gif'
        ];
        $this->db->table('workout')->insert($gerakan2);

        $gerakan3 = [
            'id_days' => 3,
            'gerakan' => 'Flutter Kick',
            'waktu' => 60,
            'gif' => 'flutter_kick.gif'
        ];
        $this->db->table('workout')->insert($gerakan3);

        $gerakan4 = [
            'id_days' => 3,
            'gerakan' => 'Plank',
            'waktu' => 60,
            'gif' => 'plank.jpg'
        ];
        $this->db->table('workout')->insert($gerakan4);

        $gerakan5 = [
            'id_days' => 3,
            'gerakan' => 'Crunch Perut',
            'repitisi' => '16x',
            'gif' => 'crunch_perut.gif'
        ];
        $this->db->table('workout')->insert($gerakan5);

        $gerakan6 = [
            'id_days' => 3,
            'gerakan' => 'Sentuh Tumit',
            'repitisi' => '16x',
            'gif' => 'sentuh_tumit.gif'
        ];
        $this->db->table('workout')->insert($gerakan6);

        $gerakan7 = [
            'id_days' => 3,
            'gerakan' => 'Plank',
            'waktu' => 60,
            'gif' => 'plank.jpg'
        ];
        $this->db->table('workout')->insert($gerakan7);

        $gerakan8 = [
            'id_days' => 3,
            'gerakan' => 'Peregangan kobra',
            'waktu' => 60,
            'gif' => 'peregangan_kobra.jpg'
        ];
        $this->db->table('workout')->insert($gerakan8);


        //day 4
        $gerakan1 = [
            'id_days' => 4,
            'gerakan' => 'Lompat Tanpa Tali',
            'waktu' => 60,
            'gif' => 'lompat_tanpa_tali.gif'
        ];
        $this->db->table('workout')->insert($gerakan1);

        $gerakan2 = [
            'id_days' => 4,
            'gerakan' => 'Lunge',
            'repitisi' => "16x",
            'gif' => 'lunge.gif'
        ];
        $this->db->table('workout')->insert($gerakan2);

        $gerakan3 = [
            'id_days' => 4,
            'gerakan' => 'Sentuh Tumit',
            'repitisi' => '16x',
            'gif' => 'sentuh_tumit.gif'
        ];
        $this->db->table('workout')->insert($gerakan3);

        $gerakan4 = [
            'id_days' => 4,
            'gerakan' => 'Plank',
            'waktu' => 60,
            'gif' => 'plank.jpg'
        ];
        $this->db->table('workout')->insert($gerakan4);

        $gerakan5 = [
            'id_days' => 4,
            'gerakan' => 'Push Up',
            'repitisi' => '12x',
            'gif' => 'push_up.gif'
        ];
        $this->db->table('workout')->insert($gerakan5);

        $gerakan6 = [
            'id_days' => 4,
            'gerakan' => 'Crunch Balik',
            'repitisi' => '16x',
            'gif' => 'crunch_balik.gif'
        ];
        $this->db->table('workout')->insert($gerakan6);

        $gerakan7 = [
            'id_days' => 4,
            'gerakan' => 'Plank',
            'waktu' => 60,
            'gif' => 'plank.jpg'
        ];
        $this->db->table('workout')->insert($gerakan7);

        $gerakan8 = [
            'id_days' => 4,
            'gerakan' => 'Peregangan kobra',
            'waktu' => 60,
            'gif' => 'peregangan_kobra.jpg'
        ];
        $this->db->table('workout')->insert($gerakan8);



        //day 5
        $gerakan1 = [
            'id_days' => 5,
            'gerakan' => 'Lompat Tanpa Tali',
            'waktu' => 60,
            'gif' => 'lompat_tanpa_tali.gif'
        ];
        $this->db->table('workout')->insert($gerakan1);

        $gerakan2 = [
            'id_days' => 5,
            'gerakan' => 'Trincip Dip',
            'repitisi' => "16x",
            'gif' => 'trincip_dip.gif'
        ];
        $this->db->table('workout')->insert($gerakan2);

        $gerakan3 = [
            'id_days' => 5,
            'gerakan' => 'Angkat Lutut / Berlari',
            'repitisi' => '16x',
            'gif' => 'angkat_lutut.gif'
        ];
        $this->db->table('workout')->insert($gerakan3);

        $gerakan4 = [
            'id_days' => 5,
            'gerakan' => 'Plank',
            'waktu' => 60,
            'gif' => 'plank.jpg'
        ];
        $this->db->table('workout')->insert($gerakan4);

        $gerakan5 = [
            'id_days' => 5,
            'gerakan' => 'Jongkok Berdenyut',
            'waktu' => 60,
            'gif' => 'jongkok_berdenyut.gif'
        ];
        $this->db->table('workout')->insert($gerakan5);

        $gerakan6 = [
            'id_days' => 5,
            'gerakan' => 'Crunch Sepeda',
            'repitisi' => '16x',
            'gif' => 'crunch_sepeda.gif'
        ];
        $this->db->table('workout')->insert($gerakan6);

        $gerakan7 = [
            'id_days' => 5,
            'gerakan' => 'Plank',
            'waktu' => 60,
            'gif' => 'plank.jpg'
        ];
        $this->db->table('workout')->insert($gerakan7);

        $gerakan8 = [
            'id_days' => 5,
            'gerakan' => 'Peregangan kobra',
            'waktu' => 60,
            'gif' => 'peregangan_kobra.jpg'
        ];
        $this->db->table('workout')->insert($gerakan8);


        //day 6
        $gerakan1 = [
            'id_days' => 6,
            'gerakan' => 'Lompat Tanpa Tali',
            'waktu' => 60,
            'gif' => 'lompat_tanpa_tali.gif'
        ];
        $this->db->table('workout')->insert($gerakan1);

        $gerakan2 = [
            'id_days' => 6,
            'gerakan' => 'Trincip Dip',
            'repitisi' => "16x",
            'gif' => 'trincip_dip.gif'
        ];
        $this->db->table('workout')->insert($gerakan2);

        $gerakan3 = [
            'id_days' => 6,
            'gerakan' => 'Lunge',
            'repitisi' => '16x',
            'gif' => 'lunge.gif'
        ];
        $this->db->table('workout')->insert($gerakan3);

        $gerakan4 = [
            'id_days' => 6,
            'gerakan' => 'Plank',
            'waktu' => 60,
            'gif' => 'plank.jpg'
        ];
        $this->db->table('workout')->insert($gerakan4);

        $gerakan5 = [
            'id_days' => 6,
            'gerakan' => 'Crunch Balik',
            'repitisi' => '16x',
            'gif' => 'crunch_balik.gif'
        ];
        $this->db->table('workout')->insert($gerakan5);

        $gerakan6 = [
            'id_days' => 6,
            'gerakan' => 'Crunch Lengan Lurus',
            'repitisi' => '16x',
            'gif' => 'crunch_lengan_lurus.gif'
        ];
        $this->db->table('workout')->insert($gerakan6);

        $gerakan7 = [
            'id_days' => 6,
            'gerakan' => 'Plank',
            'waktu' => 60,
            'gif' => 'plank.jpg'
        ];
        $this->db->table('workout')->insert($gerakan7);

        $gerakan8 = [
            'id_days' => 6,
            'gerakan' => 'Peregangan kobra',
            'waktu' => 60,
            'gif' => 'peregangan_kobra.jpg'
        ];
        $this->db->table('workout')->insert($gerakan8);


        //day 7
        $gerakan1 = [
            'id_days' => 7,
            'gerakan' => 'Squat',
            'repitisi' => '16x',
            'gif' => 'squat.gif'
        ];
        $this->db->table('workout')->insert($gerakan1);

        $gerakan2 = [
            'id_days' => 7,
            'gerakan' => 'Jingkat Papan',
            'waktu' => 60,
            'gif' => 'jingkat_papan.gif'
        ];
        $this->db->table('workout')->insert($gerakan2);

        $gerakan3 = [
            'id_days' => 7,
            'gerakan' => 'Sentuh Tumit',
            'repitisi' => '16x',
            'gif' => 'sentuh_tumit.gif'
        ];
        $this->db->table('workout')->insert($gerakan3);

        $gerakan4 = [
            'id_days' => 7,
            'gerakan' => 'Plank',
            'waktu' => 60,
            'gif' => 'plank.jpg'
        ];
        $this->db->table('workout')->insert($gerakan4);

        $gerakan5 = [
            'id_days' => 7,
            'gerakan' => 'Push Up',
            'repitisi' => '12x',
            'gif' => 'push_up.gif'
        ];
        $this->db->table('workout')->insert($gerakan5);

        $gerakan6 = [
            'id_days' => 7,
            'gerakan' => 'Angkat Kaki',
            'repitisi' => '16x',
            'gif' => 'angkat_kaki.gif'
        ];
        $this->db->table('workout')->insert($gerakan6);

        $gerakan7 = [
            'id_days' => 7,
            'gerakan' => 'Plank',
            'waktu' => 60,
            'gif' => 'plank.jpg'
        ];
        $this->db->table('workout')->insert($gerakan7);

        $gerakan8 = [
            'id_days' => 7,
            'gerakan' => 'Peregangan kobra',
            'waktu' => 60,
            'gif' => 'peregangan_kobra.jpg'
        ];
        $this->db->table('workout')->insert($gerakan8);
    }
}

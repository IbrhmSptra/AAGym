<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Database\Migrations\DaysDone;
use App\Database\Migrations\Workoutdone;
use App\Models\DaysdoneModel;
use App\Models\DaysModel;
use App\Models\WorkoutdoneModel;
use App\Models\WorkoutModel;

class Latihan extends BaseController
{


    public function index()
    {
        //get table daysdone ("visited")
        $daysdonemodel = new DaysdoneModel();
        $daysdone = $daysdonemodel->findAll();
        //loop to get spesific array and make into new one
        $daysdonearr = [
            'id' => []
        ];
        foreach ($daysdone as $row) {
            array_push($daysdonearr['id'], $row['id']);
        }

        //show modal reset syaratnya harus daysdone harus ada 7 hari
        $isfinish = false;
        if (count($daysdone) === 7) {
            $isfinish = true;
        }

        //get table day
        $daysmodel = new DaysModel();
        $days = $daysmodel->findAll();
        $data = [
            'title' => 'AAGym | Latihan',
            'table' => $days,
            'daysdone' => $daysdonearr,
            'showmodal' => $isfinish
        ];

        return view('/outercontent/latihan', $data);
    }

    public function daysdetail($id = null)
    {
        //get table days for cal
        $daysmodel = new DaysModel();
        $days = $daysmodel->find($id);

        //cek is there value in $workout if its not show exception
        if (!$days) {
            throw new \Exception("Data not found!");
        }

        //get table workout where foreign keys id_days
        $workoutmodel = new WorkoutModel();
        $workout = $workoutmodel->where('id_days', $id)->findAll();

        //get all row table workout done
        $workoutdonemodel = new WorkoutdoneModel();
        $workoutdone = $workoutdonemodel->findAll();

        //loop to get spesific row from workout done
        $iddone = ['id' => []];
        foreach ($workoutdone as $row) {
            array_push($iddone['id'], $row['id']);
        }

        //send the data to view
        $data = [
            'title' => 'Workout Day ' . $id,
            'table' => $workout,
            'day' => $days,
            'done' => $iddone,
        ];
        return view('/intercontent/daysworkout', $data);
    }

    public function workoutdetail($id = null)
    {
        //get tables workout
        $workoutmodel = new WorkoutModel();
        $workout = $workoutmodel->find($id);

        //cek if its null?? throw exception
        if (!$workout) {
            throw new \Exception("Data not found!");
        }

        //send the data to view
        $data = [
            'title' => $workout['gerakan'],
            'table' => $workout
        ];

        return view('/intercontent/workout', $data);
    }

    //ini function untuk insert workout ke table workout done untuk fitur "Visited" berubah warna
    //disini juga ngelakuin buat cek apakah days yang di visited udh 8 workout jika iya insert days ke table daysdone untuk fitur visited
    public function visited($id = null)
    {
        //get tables workout
        $workoutmodel = new WorkoutModel();
        $workout = $workoutmodel->find($id);

        //cek if its null?? throw exception
        if (!$workout) {
            throw new \Exception("Data not found!");
        }

        //get tables workoutdone untuk tujuan insert
        $workoutdonemodel = new WorkoutdoneModel();


        //make row
        $data = [
            "id" => $workout['id'],
            "id_days" => $workout['id_days'],
            "gerakan" => $workout['gerakan'],
        ];
        //untuk menghindari duplikasi data ketika di insert maka ambil dlu di table workoutdone yang idnya sesuai 
        //ama yg diklik lalu cek empty apa kaga klo empty berarti bisa di insert
        $workoutdone = $workoutdonemodel->find($id);
        if (empty($workoutdone)) {
            //insert
            $workoutdonemodel->insert($data);
        }


        //untuk insert daysdone syaratny workoutdone yg id_daysnya sama harus berjumlah 8 row
        $workoutdone = $workoutdonemodel->where('id_days', $workout['id_days'])->findAll();
        if (count($workoutdone) === 8) {
            $daysdonemodel = new DaysdoneModel();
            $daysmodel = new DaysModel();
            //get dlu dari table days buat bahan isian
            $days = $daysmodel->find($workout['id_days']);
            $data = [
                'id' => $days['id'],
                'day' => $days['day']
            ];
            $daysdonemodel->insert($data);
        }
        return redirect()->to('/workoutdetail/' . $id);
    }

    public function reset()
    {
        //get model for daysdone and workoutdone with function deleteall() in it
        $daysdonemodel = new DaysdoneModel();
        $workoutdonemodel = new WorkoutdoneModel();
        $daysdonemodel->deleteAll();
        $workoutdonemodel->deleteAll();

        return redirect()->to('/latihan');
    }
}

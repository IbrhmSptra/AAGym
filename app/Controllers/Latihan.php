<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Database\Migrations\Workoutdone;
use App\Models\DaysModel;
use App\Models\WorkoutdoneModel;
use App\Models\WorkoutModel;

class Latihan extends BaseController
{


    public function index()
    {
        $daysmodel = new DaysModel();
        $days = $daysmodel->findAll();
        $data = [
            'title' => 'AAGym | Latihan',
            'table' => $days
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

        //make model for workoutdone
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
    public function workoutdone($id = null)
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
        //dapetin row tapi idnya aja di table workoutdone yang idnya sesuai ama yang diklik
        $workoutdone = $workoutdonemodel->where('id', $id)->find($id);

        //make row
        $data = [
            "id" => $workout['id'],
            "id_days" => $workout['id_days'],
            "gerakan" => $workout['gerakan'],
        ];
        if (empty($workoutdone)) {
            //insert
            $workoutdonemodel->insert($data);
        }
        return redirect()->to('/workoutdetail/' . $id);
    }
}

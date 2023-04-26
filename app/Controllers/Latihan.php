<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DaysModel;
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
        //get table workout where foreign keys id_days
        $workoutmodel = new WorkoutModel();
        $workout = $workoutmodel->where('id_days', $id)->findAll();

        //get table days for cal
        $daysmodel = new DaysModel();
        $days = $daysmodel->find($id);

        //cek is there value in $workout if its not show exception
        if (!$days) {
            throw new \Exception("Data not found!");
        }

        //send the data to view
        $data = [
            'title' => 'Workout Day ' . $id,
            'table' => $workout,
            'day' => $days
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
            'table' => $workout,
        ];

        return view('/intercontent/workout', $data);
    }
}

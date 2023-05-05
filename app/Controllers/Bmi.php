<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use PhpParser\Node\Expr\Cast\Double;

class Bmi extends BaseController
{
    public function index()
    {
        $session = \Config\Services::session();
        $data = [

            'result' => $session->getFlashdata('result'),
            'validation' => $session->getFlashdata('validation')
        ];


        return view("/outercontent/bmi", $data);
    }

    public function calculate()
    {
        //validasi
        if (!$this->validate([
            'tinggi' => [
                'rules' => 'required|numeric|greater_than[0]',
                'errors' => [
                    'required' => 'isi {field} terlebih dahulu.',
                    'greater_than' => '{field} tidak boleh kurang dari 1 cm'
                ]
            ],
            'berat' => [
                'rules' => 'required|numeric|greater_than[0]',
                'errors' => [
                    'required' => 'isi {field} terlebih dahulu.',
                    'greater_than' => '{field} tidak boleh kurang dari 1 kg'
                ]
            ]
        ])) {
            $validation = [
                'haserrortinggi' => $this->validator->hasError('tinggi'),
                'haserrorberat' => $this->validator->hasError('berat'),
                'geterrorberat' => $this->validator->getError('berat'),
                'geterrortinggi' => $this->validator->getError('tinggi')
            ];
            return redirect()->to('/bmi')->withInput()->with('validation', $validation);
        }
        //get berat and tinggi from post
        $berat = (float) $this->request->getPost('berat');
        $tinggi = (float) $this->request->getPost('tinggi');

        //ubah tinggi dari cm ke m
        $tinggi = $tinggi / 100;
        //calculate
        $bmi = round($berat / (pow($tinggi, 2)), 1);

        //klasifikasi bmi
        $style = "";
        $klasifikasi = "";
        $styletext = 'style="color: white !important;"';
        $golongan = "";
        switch ($bmi) {
            case $bmi < 18.5:
                $klasifikasi = "olahraga teratur dan lebih sering makan";
                $style = 'style="background-color: #AFAFAF !important;"';
                $golongan = "kurus";
                break;
            case $bmi >= 18.5 && $bmi <= 22.9:
                $klasifikasi = "berat badanmu ideal, pertahankan";
                $style = 'style="background-color: #DFBD00 !important;"';
                $golongan = "normal";
                break;
            case $bmi >= 23.0 && $bmi <= 24.9:
                $klasifikasi = "batasi gula, garam dan lemak, serta olahraga";
                $style = 'style="background-color: #C8651B !important;"';
                $golongan = 'gemuk';
                break;
            case $bmi >= 25.0 && $bmi <= 29.9:
                $klasifikasi = "konsumsi sayur dan meningkatkan aktivitas fisik";
                $style = 'style="background-color: #DE0001 !important;"';
                $golongan = 'obesitas1';
                break;
            case $bmi > 30:
                $klasifikasi = "konsumsi sayur dan meningkatkan aktivitas fisik setiap hari";
                $style = 'style="background-color: #27231F !important; "';
                $golongan = 'obesitas2';
                break;
        }

        $data = [
            'klasifikasi' => $klasifikasi,
            'style' => $style,
            'styletext' => $styletext,
            'bmi' => $bmi,
            'golongan' => $golongan
        ];

        return redirect()->to('/bmi')->withInput()->with('result', $data);
    }
}

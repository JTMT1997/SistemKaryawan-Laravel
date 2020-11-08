<?php

namespace App\Http\Controllers;

use App\Karyawan;
use App\Karyawan\KaryawanRepository as KaryawanKaryawanRepository;
use App\Posisi;
use Illuminate\Http\Request;
use KaryawanRepository;

class DashboardController extends Controller
{   

    public function grafik(){
        $karyawan = Posisi::all();
        return response()->json($karyawan);
    }
    public function dashboard(){
        return view('dashboard');
    }
}

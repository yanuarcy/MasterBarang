<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $Tittle = 'Home Page';
        $Nama = 'Yanuar Cahyo E.W';
        $Alamat = 'Surabaya';
        $Institut = 'Institut Teknologi Telkom Surabaya';
        $Jurusan = 'Sistem Informasi';
        $Kelas = 'IS 04-01';
        $NIM = '1204210134';

        return view('home', compact(
            'Tittle',
            'Nama',
            'Alamat',
            'Institut',
            'Jurusan',
            'Kelas',
            'NIM'
        ));
    }
}

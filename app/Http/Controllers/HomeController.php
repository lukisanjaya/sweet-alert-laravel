<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;

class HomeController extends Controller
{
    //
    public function index()
    {
        Alert::success('Isi dari Pesan yang ingin ditampilkan', 'Judul Pesan');
        return view('welcome');
    }
}

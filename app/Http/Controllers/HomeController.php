<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $nama = 'Sutan Arsyah Nugraha';
        return view('home', ['nama' => $nama]);
    }
    public function biodata()
{
    $nama = 'Sutan Arsyah Nugraha';
    $mata_pelajaran = ['Laravel', 'Pemrograman Web', 'Basis Data'];
    return view('home', ['nama' => $nama, 'mapel' => $mata_pelajaran]);
}

}


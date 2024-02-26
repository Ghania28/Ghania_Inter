<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
    public function index()
    {
        $nama = "Halo nama saya ghania";
        return view('belajar', ['nama' => $nama]);
    }

    function biodata()
    {
        $nama = 'ghania';
        $matkul = ['kewirausahaan', 'workshop mobile', 'agama'];

        return view('belajar', compact('nama', 'matkul'));
    }

}

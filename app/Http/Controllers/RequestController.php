<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function viewPostData(){
        return view('pendaftaran');
    }
    public function processPostData(Request $request){
        echo 'Nama: '. $request->nama . '<br>';
        echo 'Email: '. $request->email;
    }
}


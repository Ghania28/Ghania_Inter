<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetDataController extends Controller
{
    public function viewGetData(Request $request){
        echo '<h2>Metode Get</h2>';
        echo 'Nama: '. $request->Nama . '<br>';
        echo 'Email: '. $request->email;

    }
}

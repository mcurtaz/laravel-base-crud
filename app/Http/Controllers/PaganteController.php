<?php

namespace App\Http\Controllers;

use App\Pagante;
use Illuminate\Http\Request;

class PaganteController extends Controller
{

    public function paganti(){

        $paganti = Pagante::all();

        return view('home', compact('paganti'));
    }

}

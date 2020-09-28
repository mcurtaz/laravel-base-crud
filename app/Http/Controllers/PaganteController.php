<?php

namespace App\Http\Controllers;

use App\Pagante;
use Illuminate\Http\Request;

class PaganteController extends Controller
{

    public function index(){

        $paganti = Pagante::all();

        return view('paganti.paganti-index', compact('paganti'));
    }

}

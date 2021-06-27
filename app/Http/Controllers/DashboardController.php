<?php

namespace App\Http\Controllers;

use App\Buku;
use App\KategoriBuku;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

   
    public function index(){
        $kat = KategoriBuku::all();
        $buku = Buku::all();
        return view('backend.dashboard.dash',compact('kat', 'buku'));
    }
}

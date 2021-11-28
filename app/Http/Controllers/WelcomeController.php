<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pengunjung;

class WelcomeController extends Controller
{
    public function index(){


         return view('/welcome');
     }
}

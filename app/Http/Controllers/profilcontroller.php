<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Profilcontroller extends Controller
{
    public function index() 
    {
        return view('profil');
    }
}

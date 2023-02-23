<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        
            // recupero array fumetti
            $fumetti = config('comics.fumetti');
            // recupero array icone
            $icone = config('comics.icone');
            // recupero array social
            $social = config('comics.social');

        return view('homepage', compact('fumetti','icone','social'));
    }
}

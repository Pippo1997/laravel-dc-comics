<?php

namespace App\Http\Controllers;
use App\Models\Comic;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        // recupero array icone
        $icone = config('IconSocial.icone');
        // recupero array social
        $social = config('IconSocial.social');

        return view('homepage', compact('icone','social'));
    }
}

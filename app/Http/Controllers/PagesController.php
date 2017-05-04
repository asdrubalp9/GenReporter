<?php

namespace App\Http\Controllers;

class PagesController extends Controller{
    
    
    public function contact(){
        return view('contact');
    }
    public function about(){
        return view('about');
    }
    public function crearReporte(){
        return view('reportes.crear');
    }

    
    
}
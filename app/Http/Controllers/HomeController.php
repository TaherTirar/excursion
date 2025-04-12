<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function  acceuil(){
        return view('index');
    }
    public function  excursion(){
        return view('excursion');
    }
    public function activite (){
        return view('activité');
    }
    public function  detail() {
        return view('detail');
    }
    public function  info(){
        return view('info');
    }
    public function  contact(){
        return view('contact');
    }
}

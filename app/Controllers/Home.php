<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): String
    {
        return view('agriculteur');
    }
    public function agriculteur(): String
    {
        return view('agriculteur');
    }
    
    public function planteform(): String
    {
        return view('planteform');
    }
    public function planteresult(): String
    {
        return view('planteresult');
    }
    public function user(): String
    {
        return view('user');
    }

}
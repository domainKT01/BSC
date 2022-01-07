<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller{

    public function LogIn(){

        return view('Nav.LogIn');
    
    }

    public function SignUp(){

        return view('Nav.SignUp');
    }
}

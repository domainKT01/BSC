<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Nette\Utils\Strings;
use App\Http\Controllers\inData;

class formController extends Controller{ 
    
    public function store(Request $request){

        $data =$request->all();

        inData::SignUp($request);

    }
    
}


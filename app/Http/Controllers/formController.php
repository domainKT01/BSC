<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class formController extends Controller
{
    
    public function store(Request $request){

        $user = new User();

        $user->name = $request->name;

        $user->email = $request->email;

        $user->password = $request->password;

        $user->save();

        print ($request);

        return redirect()->route('page.login');
    }
}

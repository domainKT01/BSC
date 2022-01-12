<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class inData extends Controller{

    public static function SignUp($request){

        if ($request->name!=null || $request->email!=null || $request->password!=null){

            $user = new User();

            $user->name = $request->name;

            $user->email = $request->email;

            $user->password = $request->password;

            $user->save();

            return redirect()->route('page.login');

        }else{

            echo '<h1><center>por favor llena todos los campos</center></h1>';
        }

    }

    public static function LogIn(Request $request){

        if ($request->email!=null || $request->password!=null){

            try{

                $data = new User();

                $data::where('name', $request->name and 'password', $request->password);

                return view('Nav.Home');

            }catch(Exception $e){

                echo $e->getMessage();
            }

        }else{

            echo 'llena el formulario';
        }
    }
}

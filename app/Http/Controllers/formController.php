<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Nette\Utils\Strings;
use App\Http\Controllers\inData;
use App\Models\calcular_IMC;

class formController extends Controller{ 
    
    public function store(Request $request){

        $user = new User();

        if ($request->email){

            $user->name = $request->name;

            $user->email = $request->email;

            $user->password = $request->password;

            return redirect()->route('page.login');
        }

        else if ($request->talla) {
            
            $imc = new calcular_IMC();

            $response = $imc->calculo(floatval($request->talla),floatval($request->peso));

            $categoria = $imc->categorizar($response);

            $volemia = $imc->volemia($request->talla, $request->peso, $request->value);

            if ($volemia < 3500){

                $apto = 'Apto';
            }

            else {

                $apto = 'No Apto';
            }

            return view('Nav.response');
        }

        else{

            $user->where('name', $request->name and 'password', $request->password);

            return view('Nav.Home');
        }

    }
    
}


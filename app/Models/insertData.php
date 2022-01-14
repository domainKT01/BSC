<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class insertData extends Model
{
    use HasFactory;

    protected $table = 'users';

    public static function insert_Data_user($request)
    {

        $user = new User();

        $user->name = $request->name;

        $user->email = $request->email;

        $user->password = $request->password;

        $user->save();

        return redirect()->route('page.login');
    }

    public static function insert_Data_patient($request)
    {

        $user = new User();

        $imc = new calcular_IMC();

        #$user->setTable('patients');

        $response = $imc->calculo(floatval($request->talla), floatval($request->peso));

        $categoria = $imc->categorizar($response);

        $volemia = $imc->volemia($request->talla, $request->peso, $request->sexo);

        $user->nombre = $request->nombrePaciente;

        $namePatient = $request->nombrePaciente;

        if ($request->sexo) {

            $user->sexo = $request->sexo;

            $user->imc = $response;

            $user->volemia = $volemia;

            if ($volemia < 3500) {

                $apto = 'Apto';
            }
        } else {

            $apto = 'No Apto';
        }

        $data = array('namePatient', 'response', 'volemia', 'apto');

        $user->save();

        return view('Nav.response', compact('data'));
    }

    public static function validate($request)
    {

        $user = new User();

        $response = $user->where('name', $request->name and 'password', $request->password)->get();

        if ($response == []){

            return  '';
        }

        return gettype($response);
    }
}

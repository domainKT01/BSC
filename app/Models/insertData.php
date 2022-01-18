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

        $user1 = new User();

        $user1->setTable('patients');

        $imc = new calcular_IMC();

        $user1->setTable('patients');

        $response = $imc->calculo(floatval($request->talla), floatval($request->peso));

        $categoria = $imc->categorizar($response);

        $volemia = $imc->volemia($request->talla, $request->peso, $request->sexo);

        $user1->nombre = $request->nombrePaciente;

        $namePatient = $request->nombrePaciente;

        $apto = 'apto';

        if ($request->sexo) {

            $user1->sexo = $request->sexo;

            $user1->imc = $response;

            $user1->volemia = $volemia;

            if ($volemia >= 3500) {

                $apto = 'Apto';
            }
        } else {

            $apto = 'No Apto';
        }

        $user1->save();

        

        return view('Nav.response', compact('namePatient', 'response', 'volemia', 'apto', 'categoria'));
    }

    public static function validate($request)
    {

        $user2 = new User();

        $responseName = $user2->select('id')->where('name', $request->name)->get();

        $responsePassword = $user2->select('id')->where('password', $request->password)->get();

        if (empty($responseName)) {

            $responseName = null;
        }

        if ($responseName != $responsePassword) {

            echo "<script>

            alert('invalido ingreso');

            </script>

            ";

            return view('Nav.LogIn');

        } else {

            return view('Nav.Home');
        }
    }
}

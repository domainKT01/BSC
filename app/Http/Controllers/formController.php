<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Nette\Utils\Strings;
use App\Http\Controllers\inData;
use App\Models\calcular_IMC;
use App\Models\insertData;
use Illuminate\Foundation\Auth\User as AuthUser;

class formController extends Controller
{

    public function store(Request $request)
    {


        if ($request->email){

            return insertData::insert_Data_user($request);

        } else if ($request->nombrePaciente) {

            return insertData::insert_Data_patient($request);

        } else {

            return insertData::validate($request);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\register;
use Illuminate\Http\Request;
use Validator;

class RegisterController extends Controller
{
    public $successStatus = 200;

    public function register(Request $request)
    {
        $validatedData = [
            'name' => $request->name,
            'subname' => $request->subname,
            'id_card' => $request->id_card,
            'grade' => $request->grade,
            'faculty' => $request->faculty,
            'major' => $request->major,     
            'sex' => $request->sex,
            'domicile' => $request->domicile,
            'school_name' => $request->school_name,
            'school_type' => $request->school_type,
            'email' => $request->email,
            'address' => $request->address,
            'father_name' => $request->father_name,
            'father_work' => $request->father_work,
            'morther_name' => $request->morther_name,
            'morther_work' => $request->morther_work,
            'income' => $request->income,
            'birth_date' => $request->birth_date,
            'label' => $request->label,
        ];

        $input = $validatedData; 

        $user = register::create($input); 

        $success = $user->name;

        return response()->json(['success'=>$success], $this-> successStatus); 
    }

    public function show_register(Request $request)
    {
        $data = register::all();

        return $data; 
    }
};
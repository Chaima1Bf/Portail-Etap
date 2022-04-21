<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absence;


class AbsenceController extends Controller
{
    //
    function show(){
        $data= Absence::all();
        return view ('layouts.absence',['absences'=>$data]);
    }
}

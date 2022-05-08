<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absence;
use Illuminate\Support\Facades\Auth;

class AbsenceController extends Controller
{
    //
    public function show(){
        if (Auth::user()->is_admin==true){
            $data = Absence::with('user')->paginate();
        }
        else {
            $data = Absence::with('user')->where('user_id',auth()->id())->paginate();
        }
        return view ('layouts.absence',['absences'=>$data]);
    }

    public function search(Request $request) {
        $search = $request->get('query');
        if (Auth::user()->is_admin==true){
            $data = Absence::whereHas('user',function($query) use ($search){
                   return $query->where('name', 'like', '%' .$search. '%' );
                } )
                ->with('user')
                ->paginate();
        }
        else {
            $data = Absence::with('user')->where('user_id',auth()->id())->paginate();
        }
        return view ('layouts.absence',['absences'=>$data]);
    }

}

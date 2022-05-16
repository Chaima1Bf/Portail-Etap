<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pointage;
use Illuminate\Support\Facades\Auth;

class PointageController extends Controller
{
    //
    public function show(){
        if (Auth::user()->is_admin==true){
            $data = Pointage::with('user')->paginate();
        }
        else {
            $data = Pointage::with('user')->where('user_id',auth()->id())->paginate();
        }
        return view ('layouts.pointage',['pointages'=>$data]);
    }

    public function search(Request $request) {
        $search = $request->get('query');
        if (Auth::user()->is_admin==true){
            $data = Pointage::whereHas('user',function($query) use ($search){
                   return $query->where('name', 'like', '%' .$search. '%' );
                } )
                ->with('user')
                ->paginate();
        }
        else {
            $data = Pointage::with('user')->where('user_id',auth()->id())->paginate();
        }
        return view ('layouts.pointage',['pointages'=>$data]);
    }

}
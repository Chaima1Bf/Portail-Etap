<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnel;
use App\Models\Absence;

use Auth;
use Illuminate\Foundation\Auth\User;

class DashboardController extends Controller
{
    public function index()
    {
        $personnels = User::count();
        if (Auth::user()->is_admin==true){
            $absence = Absence::count();
        }
        else {
            $absence = Absence::where('user_id',auth()->id())->count();
        }
        return view('layouts.dashboard', compact('personnels', 'absence'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Charts\UsersByGender;
use Illuminate\Http\Request;
use App\Models\Personnel;
use App\Models\Absence;

use Auth;
use Illuminate\Foundation\Auth\User;

class DashboardController extends Controller
{
    public function index(UsersByGender $usersByGenderChart)
    {
        $personnels = User::count();
        if (Auth::user()->is_admin==true){
            $absence = Absence::count();
        }
        else {
            $absence = Absence::where('user_id',auth()->id())->count();
        }
        $usersByGenderChart = $usersByGenderChart->build();
        
        return view('layouts.dashboard', compact('personnels', 'absence' , 'usersByGenderChart'));
    }
}

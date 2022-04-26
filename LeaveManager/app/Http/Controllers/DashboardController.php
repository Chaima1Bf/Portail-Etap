<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnel;


class DashboardController extends Controller
{
    public function index()
    {
        $personnels = Personnel::count();
        return view('layouts.dashboard', compact('personnels'));
    }
}

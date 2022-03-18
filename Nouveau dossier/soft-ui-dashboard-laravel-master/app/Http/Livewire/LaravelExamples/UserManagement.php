<?php

namespace App\Http\Livewire\LaravelExamples;

use Livewire\Component;

class UserManagement extends Component
{
    public function render()
    {
        return view('livewire.laravel-examples.user-management');
    }
    public function index()
    {
        $personnels=DB::table('personnels')->get();
        dd($personnels);
        return view ('livewire.laravel-examples.user-managment')
            ->with('personnels',$personnels);
    }
}

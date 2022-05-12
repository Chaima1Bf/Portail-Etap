<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;   
use App\Models\User;

class MultiStepUser extends Component
{
    use WithFileUploads;

    public $name;
    public $matricule;
    public $gender;
    public $email;
    public $email_verified_at;
    public $is_admin;
    public $birth_date;
    public $cin;
    public $password;
    public $avatar;
    public $remember_token;

    public $totalSteps = 3;
    public $currentStep = 1;

    public function mount(){
        $this->currentStep =1;
    }

    public function render()
    {
        return view('livewire.multi-step-user');
    }

    public function increaseStep() {
        $this->resetErrorBag();
        $this->validateData();
        $this->currentStep++;
        if ($this->currentStep > $this->totalSteps){
            $this->currentStep = $this->totalSteps;
        }
    }

    public function decreaseStep() {
        $this->resetErrorBag();
        $this->currentStep--;
        if ($this->currentStep < 1){
            $this->currentStep = 1;
        }
    }

    public function validateData(){
        if ($this->currentStep == 1){
            $this->validate([
                'name' => 'required|string|max:255',
                'matricule' => 'required|string|size:7|unique:users,matricule',
                'cin' => 'required|string|size:8|unique:users,cin',
                'birth_date' => 'date|nullable',
                'gender' => 'required|string|in:female,male'
            ]);

        }

        elseif ($this->currentStep == 2){
            $this->validate([
                'email' => 'required|email|unique:users,email',
                'is_admin' => 'nullable|boolean',
                'password' => 'required|string|max:255'
            ]);

        }

    }

    public function register(){
        $this->resetErrorBag();
        if ($this->currentStep == 3){
            $this->validate([
                'avatar' => 'required|mimes:png,jpeg|max:1024',
            ]);
        }
        $avatar_name ='avatar_'.$this->avatar->getClientOriginalName();
        $upload_avatar = $this->avatar->storeAs('employees_avatar', $avatar_name );

        
        if ($upload_avatar){
            $values = array(
                "name"=>$this->name,
                "matricule"=>$this->matricule,
                "cin"=>$this->cin,
                "birth_date"=>$this->birth_date,
                "gender"=>$this->gender,
                "email"=>$this->email,
                "is_admin"=>$this->is_admin,
                "password"=>bcrypt($this->password),
                "avatar"=>$avatar_name,
            );
            User::insert($values);
            $this->reset();
            $this->currentStep = 1;
        }
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'PERS_NOM_X40',
        'EMAIL',
        'is_admin',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}


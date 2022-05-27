<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Signataire extends Model
{
    use HasFactory;
    public function test()
    {
        return $this->belongsTo(User::class, 'signataire_id', 'id');
    }
}

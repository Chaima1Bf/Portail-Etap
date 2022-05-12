<?php

namespace App\Models;

use App\Models\Leave;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;



/**
 * Class User
 * @package App\Models
 * @version January 25, 2022, 10:02 pm UTC
 *
 * @property string $name
 * @property string $matricule
 * @property string $gender
 * @property string $email
 * @property string|\Carbon\Carbon $email_verified_at
 * @property boolean $is_admin
 * @property string $birth_date
 * @property string $cin
 * @property string $password
 * @property string $avatar
 * @property string $remember_token
 */
class User extends Authenticatable
{
    use SoftDeletes;


    public $table = 'users';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'matricule',
        'gender',
        'email',
        'email_verified_at',
        'is_admin',
        'birth_date',
        'cin',
        'password',
        'avatar',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'matricule' => 'integer',
        'gender' => 'string',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'is_admin' => 'boolean',
        'birth_date' => 'date',
        'cin' => 'string',
        'password' => 'string',
        'avatar' => 'string',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'matricule' => 'nullable|string|size:7|unique:users,matricule',
        'gender' => 'required|string|in:Female,Male',
        'email' => 'required|email|unique:users,email',
        'email_verified_at' => 'nullable',
        'is_admin' => 'nullable|boolean',
        'birth_date' => 'date|nullable',
        'cin' => 'required|string|size:8|unique:users,cin',
        'password' => 'required|string|max:255',
        'remember_token' => 'nullable|string|max:100',
        'avatar' => 'string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * Get all of the leave requests of the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function leaves()
    {
        return $this->hasMany(Leave::class);
    }
}

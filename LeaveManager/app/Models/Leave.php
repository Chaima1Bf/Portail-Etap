<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Leave
 * @package App\Models
 * @version January 25, 2022, 11:00 pm UTC
 *
 * @property \App\Models\User $user
 * @property string $type
 * @property string $start_date
 * @property string $end_date
 * @property string $reason
 * @property string $emergency_phone
 * @property string $emergency_email
 * @property string $address
 * @property string $perdeb
 * @property string $perfin
 * @property integer $user_id
 */
class Leave extends Model
{
    use SoftDeletes;


    public $table = 'leaves';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'type',
        'status',
        'start_date',
        'end_date',
        'reason',
        'emergency_phone',
        'emergency_email',
        'address',
        'perdeb',
        'perfin',
        'user_id',


    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'type' => 'string',
        'start_date' => 'date',
        'end_date' => 'date',
        'reason' => 'string',
        'emergency_phone' => 'string',
        'emergency_email' => 'string',
        'address' => 'string',
        'perdeb' => 'string',
        'perfin' => 'string',
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'type' => 'required|string|in:Annuel,Exceptionnel,Recuperation',
        'status' => 'nullable|string|in:Traitement,Acceptée,Refusée',
        'start_date' => 'required|date|after:today',
        'end_date' => 'required|date|after:start_date',
        'reason' => 'required|string',
        'emergency_phone' => 'nullable|string',
        'emergency_email' => 'nullable|email',
        'address' => 'required|string',
        'perdeb' => 'required|string|in:Matin,Aprés-Midi',
        'perfin' => 'required|string|in:Matin,Aprés-Midi',
        'user_id' => 'required'
    ];


    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}

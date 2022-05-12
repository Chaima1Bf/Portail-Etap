<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;


/**
 * Class User
 * @package App\Models
 * @version January 25, 2022, 10:02 pm UTC
 *
 * @property string $full_name
 * @property string $fonction
 * @property string $insert_id
 */

class Badge extends Model
{
    use HasFactory;

    public $fillable = [
        'full_name',
        'fonction'
    ];
}

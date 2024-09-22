<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $table = 'hr_users';
    protected $timestamp = "false" ;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'role',
        'status',
    ];
    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $table = 'employees';
    protected $timestamp = "false" ;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'fingerprint_data',
        'positions_id', // Updated to match the foreign key in the migration
        'department',
        'status_id', // Updated to match the foreign key in the migration
        'shift_id', // Updated to match the foreign key in the migration
    ];
    use HasFactory;

    public function shift(){
        return $this->belongsTo(shift::class);

    }
}

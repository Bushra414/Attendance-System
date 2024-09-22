<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\employee;

class shift extends Model
{
    use HasFactory;

    protected $table = 'shift_assignments'; 
    protected $fillable = ['name','start_time', 'end_time', 'days_of_week'];

    public function employees(){
        return $this->hasMany(employee::class);
    }
}

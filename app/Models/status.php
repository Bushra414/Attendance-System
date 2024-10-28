<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    use HasFactory;

    protected $table = 'status'; // Specify the table name if it's not pluralized
    protected $fillable = ['name']; // Allow mass assignment for the 'name' attribute

    // Optionally, you can define relationships or other model methods here
    public function employees(){
        return $this->hasMany(employee::class);
    }
}

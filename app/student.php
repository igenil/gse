<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $table = 'students';
    protected $fillable = [
        'id', 'name', 'lastname','age'
    ];
    public function study()
    {
         return $this->hasMany(study::class); 
    }
}

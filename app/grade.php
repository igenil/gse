<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class grade extends Model
{
    protected $table = 'grades';
    protected $fillable = [
        'id', 'name', 'level'
    ];

    public function petition()
    {
         return $this->hasMany(petition::class); 
    }
    public function study()
    {
         return $this->hasMany(study::class); 
    }
}

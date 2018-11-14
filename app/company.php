<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    protected $table ='companies';
    protected $fillable = [
        'id', 'name', 'city', 'cp'
        ];

        public function petitions()
        {
             return $this->hasMany(company::class);
        }
}


<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class study extends Model
{
    protected $table = 'studies';
    protected $fillable = [
        'id', 'id_student', 'id_grade'
    ];
}

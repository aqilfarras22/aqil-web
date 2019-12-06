<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $table = 'experiences';
    protected $fillable = [
        'experience',
        'from',
        'to',
        'created_at',
        'updated_at'
       ];
    //    public $timestamps = true;
}

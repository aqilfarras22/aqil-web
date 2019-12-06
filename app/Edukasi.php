<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edukasi extends Model
{
    protected $fillable = [
        'id',
        'sekolah',
        'tahun',
       ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Newkaryawan extends Model
{
    protected $table = 'newkaryawan';
    protected $primaryKey = 'NIP';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'NIP',
        'nama',
        'pangkat',
        'gaji',
    ];

    public $timestamps = false;
}







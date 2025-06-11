<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speda extends Model
{
    use HasFactory;

    protected $table = 'speda';
    protected $fillable = ['merksepeda', 'hargasepeda', 'tersedia', 'berat'];

    public $timestamps = false; // << tambahkan ini jika tidak pakai created_at dan updated_at
}

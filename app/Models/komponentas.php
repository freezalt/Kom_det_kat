<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class komponentas extends Model
{
    use HasFactory;
    protected $fillable = ['pavadinimas', 'apibūdinimas', 'kaina'];
    //
}

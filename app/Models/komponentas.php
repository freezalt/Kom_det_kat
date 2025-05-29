<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class komponentas extends Model
{
    use HasFactory;

    protected $table = 'komponentas';

    protected $fillable = ['pavadinimas', 'apibūdinimas', 'kaina'];
    
}

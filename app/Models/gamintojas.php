<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gamintojas extends Model
{
    use HasFactory;
    protected $table = 'gamintojas';
    protected $fillable = ['pavadinimas'];
    //
}

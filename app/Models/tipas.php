<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class tipas extends Model
{
    use HasFactory;
    protected $table = 'tipas';
    protected $fillable = ['pavadinimas'];
}
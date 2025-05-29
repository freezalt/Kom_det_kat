<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sandelys extends Model
{
    use HasFactory;
    protected $table = 'sandelys';
    protected $fillable = ['pavadinimas'];
}

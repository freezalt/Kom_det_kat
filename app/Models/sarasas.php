<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sarasas extends Model
{
    use HasFactory;
    protected $table = 'sarasas';
    protected $fillable = ['kiekis'];
}

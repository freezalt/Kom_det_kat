<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategorija extends Model
{
    use HasFactory;
    protected $table = 'kategorija';
    protected $fillable = ['pavadinimas', 'tipas_id'];
    //
}

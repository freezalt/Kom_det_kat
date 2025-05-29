<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class komp_spec extends Model
{
    use HasFactory;
    protected $table = 'komp_spec';
    protected $fillable = ['spec_pavad', 'spec_verte'];
}

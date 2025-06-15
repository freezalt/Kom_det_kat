<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komponentas extends Model
{
    use HasFactory;

    protected $table = 'komponentas';
    public function gamintojas()
    {
        return $this->belongsTo(Gamintojas::class);
    }
    public function specs()
    {
        return $this->hasMany(Komp_Spec::class, 'komponentas_id');
    }
    protected $fillable = ['pavadinimas', 'apibudinimas', 'kaina', 'kategorija_id', 'gamintojas_id'];

}

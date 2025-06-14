<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sarasas extends Model
{
    use HasFactory;
    protected $table = 'sarasas';
    public function sandelys()
    {
        return $this->belongsTo(Sandelys::class);
    }
    public function komponentas()
    {
        return $this->belongsTo(Komponentas::class);
    }
    protected $fillable = ['kiekis', 'sandelys_id', 'komponentas_id'];
}

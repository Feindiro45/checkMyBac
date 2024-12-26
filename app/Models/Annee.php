<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annee extends Model
{
    use HasFactory;
    protected $table = 'annees';
    protected $fillable = [
        'annee_obtention'
    ];

    public function Resultat()
    {
        return $this->hasMany(Resultat::class);
    }
}
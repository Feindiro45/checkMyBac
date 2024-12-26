<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centre extends Model
{
    use HasFactory;
    protected $table = 'centres';
    protected $fillable = [
        'num_centre',
        'nom_centre',
        'ville_centre'
    ];

    public function Centre()
    {
        return $this->hasMany(Resultat::class);
    }
}
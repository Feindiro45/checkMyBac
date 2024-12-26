<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Resultat extends Model
{
    use HasFactory;
    protected $table = 'resultats';
    protected $fillable = [
        'id_annee',
        'matricule',
        'id_centre',
        'ville_centre',
        'status',
        'nom_eleve',
        'lycee_origine',
        'serie'
    ];

    public function Annee()
    {
        return $this->belongsTo(Annee::class,'id_annee','id');
    }
    public function Centre()
    {
        return $this->belongsTo(Centre::class,'id_annee','id');
    }
}
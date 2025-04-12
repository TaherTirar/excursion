<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';

    protected $fillable = [
        'titre', 'localisation', 'duree', 'type', 'grouptaille',
        'description', 'destination', 'depart', 'datedepart', 'heuredepart',
        'dateretour', 'heureRetour', 'inclusion', 'nonInclus',
        'plan', 'galerie', 'price'
    ];
}

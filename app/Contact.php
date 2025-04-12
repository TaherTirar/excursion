<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Contact extends Model
{
    protected $table = 'contacts';
    protected $fillable = ['nom', 'prenom','email','tel','sujet','message'/* autres colonnes fillable */];
}

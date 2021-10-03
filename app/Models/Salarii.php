<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salarii extends Model
{
    use HasFactory;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $fillable = [

        'Salariati_id', 
        'Salariu_brut', 
        'Salariu_net',
        'Luna',
        'An',
        
    ];
}

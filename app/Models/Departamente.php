<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Models\Birouri;

class Departamente extends Model
{
    use HasFactory, Notifiable;
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $fillable = [
        'Nume_departamente', 
        'birouri_id', 
    ];

  
    public function birouri()
    {
        return $this->belongsTo(Birouri::class);
    }

  
}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Departamente;
use App\Models\Birouri;

class Salariati extends Model
{
    use HasFactory;

     /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $fillable = [

        'Nume', 
        'Prenume', 
        'Email',
        'Data_de_nastere',
        'departamentes_id',
        'birouris_id',
        'Manager',
    ];

    protected $casts = [
        'Data_de_nastere' => 'datetime:Y-m-d',
    
    ];

     public function departamente()
    {
        return $this->belongsTo(Departamente::class);
    }
  

    public function birouri()
    {
        return $this->belongsTo(Birouri::class);
    }
   
}

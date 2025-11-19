<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class animales extends Model
{
    protected $table = 'animales';
    protected $primaryKey = 'ida'; // Importante: tu llave primaria es 'ida'
    public $timestamps = false;    // Tu tabla no tiene created_at/updated_at
    
    protected $fillable = ['nombre', 'foto', 'ides'];

    public function especie()
    {
        // Relación con la tabla especies
        return $this->belongsTo(especies::class, 'ides', 'ides');
    }
}
<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Regiao extends Model
{
    protected $table = 'regioes';

    public function pais()
    {
        return $this->belongsTo('App\Models\Pais');
    }

    public function comidas()
    {
        return $this->hasMany('App\Models\Comida');
    }
}

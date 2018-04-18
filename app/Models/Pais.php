<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = 'pais';

    public function regioes()
    {
        return $this->hasMany('App\Models\Regiao');
    }
}

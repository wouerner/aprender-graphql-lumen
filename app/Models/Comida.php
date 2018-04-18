<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comida extends Model
{
    protected $table = 'comidas';

    public function regiao()
    {
        return $this->belongsTo('App\Models\Regiao');
    }
}

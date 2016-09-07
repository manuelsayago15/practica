<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'Categorias';
    protected $fillable = ['nombre'];

    public function topico() {

        return $this->hasMany('App\Topico');

    }
}

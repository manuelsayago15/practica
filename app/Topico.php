<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topico extends Model
{
    protected $table = 'Topicos';
    protected $fillable = ['titulo', 'imagen','descripcion','acciones','tags','views'];

    public function categorias() {
    	
        return $this->belongsTo('App\Categorias', 'id');
    }​
}

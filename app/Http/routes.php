<?php

Route::get('/topicos',function(){
	return
}

Route::get('/categorias',[
	'as' => 'categorias.index',
	'uses' => 'CategoriaController@bring'
]);
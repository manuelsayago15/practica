<?php

Route::get('/topicos',[
	'as' => 'topicos.index',
	'uses' => 'TopicoController@index'
]);
Route::get('/categorias',[
	'as' => 'categorias.index',
	'uses' => 'CategoriaController@bring'
]);
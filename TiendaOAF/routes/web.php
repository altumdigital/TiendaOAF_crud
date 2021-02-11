<?php

    Route::get('/', function(){
		return redirect('categorias');
	});    

	Route::resource('categorias', 'CategoriaController');
	
	

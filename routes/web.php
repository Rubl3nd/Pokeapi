<?php
Route::get('/',['as'=>'index','uses'=>'Pokehome@index']);
Route::get('/{id}',['as'=>'poke.show','uses'=>'Pokehome@name']);
Route::post('seleccion',['as'=>'Seleccionados','uses'=>'Pokehome@select']);
Route::post('preview',['as'=>'preview','uses'=>'Pokehome@preview']);

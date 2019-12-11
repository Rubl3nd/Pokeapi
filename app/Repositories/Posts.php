<?php

namespace App\Repositories;
//importamos la libreia que nos sugiere pokeapi
use PokePHP\PokeApi;
class Posts
{
	//constructor para la instanciacion del api
	public function __construct()
	{
		$this->api=new PokeApi;
	}
	//Metodos que regresan datos de la pokeapi
	public function all()
	{
		//obtenemos un listado con los pokemon y los retornamos 
		$response = $this->api->resourceList('pokemon', '150', '11');
		return json_decode($response);
	}
	public function byname($id)
	{
		//obtenemos los atributos de cada pokemon y los retornamos
		$response = $this->api->pokemon($id);
		return json_decode($response);
	}
}
<?php

namespace App\Repositories;
use PokePHP\PokeApi;
class Posts
{
	public function __construct()
	{
		$this->api=new PokeApi;
	}
	public function all()
	{
		$response = $this->api->resourceList('pokemon', '150', '11');
		return json_decode($response);
	}
	public function byname($id)
	{
		$response = $this->api->pokemon($id);
		return json_decode($response);
	}
}
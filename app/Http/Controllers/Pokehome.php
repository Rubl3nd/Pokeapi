<?php

namespace App\Http\Controllers;
use App\Repositories\Posts;
use Illuminate\Http\Request;
class Pokehome extends Controller
{
	//inyectamos la claase Posts por el constructor
	protected $posts;
	public function __construct(Posts $posts)
	{
		$this->posts=$posts;
	}
	//usamos la instancia de posts para pedir los datos
	public function index()
	{
		$posts=$this->posts->all();
		//una vez teniendo nuestra lista se lo mandamos a la vista home 
		return view('home',compact('posts'));
	}
	public function name($id)
	{
		$name=$this->posts->byname($id);
		//teniendo los datos de cada pokemon se los mandamos a la vista specific
		return view('specific',compact('name','id'));
	}
	public function select(Request $request)
	{
		//guardamos todos los pokemon seleccionados para mostrarlos en otra vista
		//esto se puede cambiar dependiedo si se desea mostrar en la misma vista
		$guardados=implode(',',$request->input('seleccion'));
		$info=explode(',',$guardados);
		return view('seleccionados',compact('info'));
	}
}


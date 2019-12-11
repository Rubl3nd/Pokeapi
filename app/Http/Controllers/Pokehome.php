<?php

namespace App\Http\Controllers;
use App\Repositories\Posts;
use Illuminate\Http\Request;
class Pokehome extends Controller
{
	protected $posts;

	public function __construct(Posts $posts)
	{
		$this->posts=$posts;
	}
	public function index()
	{
		$posts=$this->posts->all();
		return view('home',compact('posts'));
	}
	public function name($id)
	{
		$name=$this->posts->byname($id);
		return view('specific',compact('name','id'));
	}
	public function select(Request $request)
	{
		$guardados=implode(',',$request->input('seleccion'));
		$info=explode(',',$guardados);
		return view('seleccionados',compact('info'));
	}
}


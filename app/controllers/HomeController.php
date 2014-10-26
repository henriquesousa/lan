<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function pesquisar()
	{
		$campo = Input::get('campo');
		$valor = ucwords(Input::get('valor'));
		$tabela = Input::get('tabela');

		$resultados = DB::table($tabela)->where($campo, '=', $valor)->get();

		
		$colunas = ["id" => "id", "nome" => "nome", "campo" => $campo ];
		//dd(Input::all());

		return View::make('index', compact('resultados', 'colunas'));
	}

}

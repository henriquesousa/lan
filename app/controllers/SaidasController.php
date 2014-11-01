<?php

class SaidasController extends BaseController {

	/**
	 * Display a listing of Saida
	 *
	 * @return Response
	 */
	
	public function lists()
	{
		$saidas = Saida::with("cliente", "funcionario", "status")->orderBy('id', 'ASC')->paginate(15);
		$qtd = count($saidas);
		//dd($saidas);
		return View::make('saidas.list', compact('saidas', 'qtd'));
	}

	/**
	 * Show the form for creating a new Saida
	 *
	 * @return Response
	 */
	public function create()
	{
		$produtos = Produto::all();
		$clientes = Cliente::all();

		return View::make('saidas.create', compact('produtos', 'clientes'));
	}


	/**
	 * Store a newly created Saida in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Saida::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$saida = new Saida;

		$saida->produto_id       = Input::get('produto');
		$saida->cliente_id		 = Input::get('cliente');
		$saida->funcionario_id	 = Auth::user()->id;
		$saida->status_id		 = Input::get('status');
		$saida->valor 			 = Input::get('valor');

		$saida->save();

		return Redirect::route('saidas');
	}

	/**
	 * Display the specified Saida.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$saida = Saida::findOrFail($id);

		return View::make('saida.show', compact('saida'));
	}

	/**
	 * Show the form for editing the specified Saida.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$saida = Saida::with('funcionario', 'produto', 'cliente', 'status')->find($id);
		$funcionarios = funcionario::all();
		$produtos = Produto::all();
		$clientes = Cliente::all();

		return View::make('saida.edit', compact('saida', 'funcionarios', 'produtos', 'clientes'));
	}

	/**
	 * Update the specified Saida in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		
		$validator = Validator::make($data = Input::all(), Saida::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$saida = Saida::findOrFail($id);

		
		$saida->save($data);

		return Redirect::route('saidas');
	}

	/**
	 * Remove the specified Saida from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Saida::destroy($id);

		return Redirect::route('saidas');
	}

}

<?php

use Validators\ClienteValidator as ClienteValidator;

class ClientesController extends BaseController {

	public function __construct() {
		
		$this->beforeFilter('csrf', array('on'=>'post'));
		
	}

	/**
	 * Display a listing of clientes
	 *
	 * @return Response
	 */


	public function lists()
	{
		$clientes = Cliente::orderBy('nome', 'ASC')->paginate(15);
		$qtd = count($clientes);
		
		return View::make('clientes.list', compact('clientes', 'qtd'));
	}

	/**
	 * Show the form for creating a new clientes
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('clientes.create');
	}

	/**
	 * Store a newly created clientes in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();

		dd($input);

		$validator = new ClienteValidator;

		if($this->validarCPF($input['cpf']))
		{
			if ($validator->validate($input, 'create')) {
			  	// validação OK
				$clientes = new Cliente();

						$clientes->nome = ucwords(Input::get("nome")." ".Input::get("sobrenome"));
						$clientes->sexo = Input::get("sexo");
						$clientes->civil = Input::get("civil");
						$clientes->rg = Input::get("rg");
						$clientes->cpf = Input::get("cpf");
						$clientes->email = Input::get("email");
						$clientes->phone = Input::get("phone");
						$clientes->save();


						
				return Redirect::route("clientes");
				
				
			}
		}
		// falha na validação
		$errors = $validator->errors();
		$errors['cpf'] = "CPF Invalido! Favor informar CPF corretamente";
		return Redirect::back()->withErrors($errors)->withInput();

	}

	/**
	 * Display the specified cliente.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

		if (Request::ajax()) {
			$funci = Cliente::find(Input::get('id'));
			return $funci;
		}
	}

	/**
	 * Show the form for editing the specified cliente.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$cliente = Cliente::find($id);

		return View::make('clientes.edit', compact('cliente'));
	}

	/**
	 * Update the specified cliente in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{
		$input = Input::get();
		//dd($input);

		$validator = new ClienteValidator;

		$cliente = Cliente::findOrFail($input['id']);

		if($this->validarCPF($input['cpf']))
		{

			if ($validator->validate($input, 'update')) {
			  // validação OK
				//$cliente = Cliente::findOrFail(Input::get('id'));

						$cliente->nome = ucwords(Input::get("nome"));
						$cliente->rg = Input::get("rg");
						$cliente->cpf = Input::get("cpf");
						$cliente->sexo = Input::get("sexo");
						$cliente->civil = Input::get("civil");
						$cliente->email = Input::get("email");
						$cliente->phone = Input::get("phone");
						$cliente->update();


				return Redirect::route('clientes');
			}
			

		}
		// falha na validação
		$errors = $validator->errors();
		$errors['cpf'] = "CPF Invalido! Favor informar CPF corretamente";
		return Redirect::back()->withErrors($errors)->withInput();
	}

	/**
	 * Remove the specified cliente from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$cliente = Cliente::findOrFail($id);
		$cliente->delete();

		return Redirect::route('clientes');
	}

	function validarCPF($cpf){
      $cpf = str_pad(str_replace(array('.','-','/'),'',$cpf),11,'0',STR_PAD_LEFT);
      $invalidos = array('00000000000', '11111111111', '22222222222', '33333333333', '44444444444', '55555555555', '66666666666', '77777777777', '88888888888', '99999999999');  

      if(strlen($cpf) != 11 || in_array($cpf,$invalidos)){
        return false;
      }
      else
      {   // Calcula os números para verificar se o CPF é verdadeiro
        for($t = 9; $t < 11; $t++){
          for($d = 0, $c = 0; $c < $t; $c++){
            $d += $cpf{$c} * (($t + 1) - $c);
          }
          $d = ((10 * $d) % 11) % 10;
          if($cpf{$c} != $d){
            return false;
          }
        }
        return true;
      }
    }


}

<?php

Route::get('/sobre', function()
{
	return View::make('ajuda');
});


/*
| Metodos da Classe UserController
*/
Route::any('/login',"UserController@login");

Route::any('/logando',[
	"as"   => "logon",
	"uses" => "UserController@logon"
]);

Route::get('/logout', 'UserController@logout');

Route::get('/index', 'UserController@login');


Route::group(array('prefix' => 'admin','before' => 'auth' ), function()
{
	
	/*
	| Rotas para Funcionários
	*/

	Route::any('/index', function()
	{
		return View::make('index');
	});

	Route::any('/funcionarios',[
		"as"   => "funcionarios",
		"uses" => "FuncionariosController@lists"
	]);

	Route::any("/funcionario/add", [
		"as" => "funcionario_add",
		"uses" => "FuncionariosController@create"
	]);

	Route::any("/funcionario/store", [
		"as" => "funcionario_store",
		"uses" => "FuncionariosController@store"
	]);

	Route::any('/funcionario/{id}',[
		"as"   => "funcionario",
		"uses" => "FuncionariosController@show"
	]);

	Route::any("/funcionario/edit/{id}", [
		"as" => "funcionario_editar",
		"uses" => "FuncionariosController@edit"
	]);

	Route::any("/funcionario/update/{id}", [
		"as" => "funcionario_update",
		"uses" => "FuncionariosController@update"
	]);

	Route::any("/funcionario/delete/{id}", [
		"as" => "funcionario_delete",
		"uses" => "FuncionariosController@destroy"
	]);

	/*
		Rotas para Clientes
	*/

	Route::any('/cliente',[
		"as"   => "clientes",
		"uses" => "ClientesController@lists"
	]);

	Route::any("/cliente/add", [
		"as" => "cliente_add",
		"uses" => "ClientesController@create"
	]);

	Route::any("/cliente/store", [
		"as" => "cliente_store",
		"uses" => "ClientesController@store"
	]);

	Route::any('/cliente/{id}',[
		"as"   => "cliente",
		"uses" => "ClientesController@show"
	]);

	Route::any("/cliente/edit/{id}", [
		"as" => "cliente_edit",
		"uses" => "ClientesController@edit"
	]);

	Route::any("/cliente/update/{id}", [
		"as" => "cliente_update",
		"uses" => "ClientesController@update"
	]);

	Route::any("/cliente/delete/{id}", [
		"as" => "cliente_delete",
		"uses" => "ClientesController@destroy"
	]);


	/*
		Rotas para Fornecedores
	*/

	Route::any('/fornecedor',[
		"as"   => "fornecedores",
		"uses" => "FornecedoresController@lists"
	]);

	Route::any("/fornecedor/add", [
		"as" => "fornecedor_add",
		"uses" => "FornecedoresController@create"
	]);

	Route::any('/fornecedor/{id}',[
		"as"   => "fornecedor",
		"uses" => "FornecedoresController@show"
	]);

	Route::any("/fornecedor/store", [
		"as" => "fornecedor_store",
		"uses" => "FornecedoresController@store"
	]);

	Route::any("/fornecedor/edit/{id}", [
		"as" => "fornecedor_edit",
		"uses" => "FornecedoresController@edit"
	]);

	Route::any("/fornecedor/update/{id}", [
		"as" => "fornecedor_update",
		"uses" => "FornecedoresController@update"
	]);

	Route::any("/fornecedor/delete/{id}", [
		"as" => "fornecedor_delete",
		"uses" => "FornecedoresController@destroy"
	]);



	/*
		Rotas para Produtos
	*/

	Route::any('/produto',[
		"as"   => "produtos",
		"uses" => "ProdutosController@lists"
	]);

	Route::any("/produto/add", [
		"as" => "produto_add",
		"uses" => "ProdutosController@create"
	]);

	Route::any("/produto/store", [
		"as" => "produto_store",
		"uses" => "ProdutosController@store"
	]);

	Route::any('/produto/{id}',[
		"as"   => "produto",
		"uses" => "ProdutosController@show"
	]);

	Route::any("/produto/edit/{id}", [
		"as" => "produto_edit",
		"uses" => "ProdutosController@edit"
	]);

	Route::any("/produto/update/{id}", [
		"as" => "produto_update",
		"uses" => "ProdutosController@update"
	]);

	Route::any("/produto/delete/{id}", [
		"as" => "produto_delete",
		"uses" => "ProdutosController@destroy"
	]);


	/*
		Rotas para Categorias
	*/

	Route::any('/categorias',[
		"as"   => "categorias",
		"uses" => "CategoriasController@lists"
	]);

	Route::any("/categorias/add", [
		"as" => "categoria_add",
		"uses" => "CategoriasController@create"
	]);

	Route::any("/categorias/store", [
		"as" => "categoria_store",
		"uses" => "CategoriasController@store"
	]);

	Route::any("/categorias/edit/{id}", [
		"as" => "categoria_edit",
		"uses" => "CategoriasController@edit"
	]);

	Route::any("/categorias/update/{id}", [
		"as" => "categoria_update",
		"uses" => "CategoriasController@update"
	]);

	Route::any("/categorias/delete/{id}", [
		"as" => "categoria_delete",
		"uses" => "CategoriasController@destroy"
	]);


	Route::any('/categorias/{id}',[
		"as"   => "categoria",
		"uses" => "CategoriasController@show"
	]);


	/*
		Rotas para saidas
	*/

	Route::any('/saidas',[
		"as"   => "saidas",
		"uses" => "SaidasController@lists"
	]);

	Route::any("/saidas/add", [
		"as" => "saida_add",
		"uses" => "SaidasController@create"
	]);

	Route::any("/saidas/store", [
		"as" => "saida_store",
		"uses" => "SaidasController@store"
	]);

	Route::any('/saidas/{id}',[
		"as"   => "saida",
		"uses" => "SaidasController@show"
	]);

	Route::any("/saidas/edit/{id}", [
		"as" => "saidas_edit",
		"uses" => "SaidasController@edit"
	]);

	Route::any("/saidas/update/{id}", [
		"as" => "saidas_update",
		"uses" => "SaidasController@update"
	]);

	Route::any("/saidas/delete/{id}", [
		"as" => "saidas_delete",
		"uses" => "SaidasController@destroy"
	]);

	Route::any("/pesquisa", [
		"as" => "pesquisa",
		"uses" => "HomeController@pesquisar"
	]);


});
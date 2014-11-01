@extends('layouts.dashboard')

 @section('head')
      @parent
      <title>Controle CLientes  - LanHouse</title>
      <style type="text/css">
      .filterable {
          margin-top: 15px;
      }
      .filterable .panel-heading .pull-right {
          margin-top: -20px;
      }
      .filterable .filters input[disabled] {
          background-color: transparent;
          border: none;
          cursor: auto;
          box-shadow: none;
          padding: 0;
          height: auto;
      }
      .filterable .filters input[disabled]::-webkit-input-placeholder {
          color: #333;
      }
      .filterable .filters input[disabled]::-moz-placeholder {
          color: #333;
      }
      .filterable .filters input[disabled]:-ms-input-placeholder {
          color: #333;
      }
    </style>
  @stop
 @section('conteudo')

    <div class="container col-md-12">
      <h3>Listas</h3>




      <!-- thumbs de cada menu com quantidades cadastradas -->
      <div class="row">
        <div class="col-sm-6 col-md-4 text-center">
          <div class="thumbnail">
            <div class="caption">
              <h3>Produtos Cadastrados</h3>
              <p class="alert alert-info">{{ $produtos }}</p>
              <p><a href="{{ URL::route('produtos') }}" class="btn btn-primary" role="button">Listar</a></p>
            </div>
          </div>
        </div>
      
        <div class="col-sm-6 col-md-4 text-center">
          <div class="thumbnail">
            <div class="caption">
              <h3>Clientes Cadastrados</h3>
              <p class="alert alert-info">{{ $clientes }}</p>
              <p><a href="{{ URL::route('clientes') }}" class="btn btn-primary" role="button">Listar</a></p>
            </div>
          </div>
        </div>
      
        <div class="col-sm-6 col-md-4 text-center">
          <div class="thumbnail">
            <div class="caption">
              <h3>Fornecedores Cadastrados</h3>
              <p class="alert alert-info">{{ $fornecedores }}</p>
              <p><a href="{{ URL::route('fornecedores') }}" class="btn btn-primary" role="button">Listar</a></p>
            </div>
          </div>
        </div>
      </div>

     





  </div>


@stop

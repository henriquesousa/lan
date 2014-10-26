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

      <div class="table">
      

      


        <div class="panel panel-success"><!-- painel-->
          <div class="panel-heading">
            <h3 class="panel-title text-center">Dados para Listas</h3>
          </div>
          <div class="panel-body">

          {{ Form::open([
            "route" => "pesquisa",
            "autocomplete" => "off",
            "class" => "form-horizontal"
          ]) }}
          <input type="hidden" name="tabela" value="funcionarios">
             <!-- Select Basic -->
             <div class="form-group">
              <label class="col-md-4 control-label" for="campos">Listar funcionario por:</label>
                <div class="col-md-5">
                  <select name="campo" class="form-control">
                    <option value="rg">RG</option>
                    <option value="cpf">CPF</option>
                    <option value="sexo">Sexo</option>
                   
                  </select>
                  {{ Form::text('valor', Input::old('valor'), array('class' => 'form-control input-md')) }}
                </div>
                 <input type="submit" value="Pesquisar" class="btn btn-sm btn-primary" />
              </div>

                       
            {{ Form::close() }}

            <hr>

            {{ Form::open([
              "route" => "pesquisa",
              "autocomplete" => "off",
              "class" => "form-horizontal"
            ]) }}
            <input type="hidden" name="tabela" value="clientes">
               <!-- Select Basic -->
               <div class="form-group">
                <label class="col-md-4 control-label" for="campos">Listar clientes por:</label>
                  <div class="col-md-5">
                    <select name="campo" class="form-control">
                      <option value="rg">RG</option>
                      <option value="cpf">CPF</option>
                      <option value="email">Email</option>
                      <option value="sexo">Sexo</option>
                     
                    </select>
                    {{ Form::text('valor', Input::old('valor'), array('class' => 'form-control input-md')) }}
                  </div>
                  
                   <input type="submit" value="Pesquisar" class="btn btn-sm btn-primary" />
                </div>

                         
              {{ Form::close() }}


              <hr>

            {{ Form::open([
              "route" => "pesquisa",
              "autocomplete" => "off",
              "class" => "form-horizontal"
            ]) }}
            <input type="hidden" name="tabela" value="produtos">
               <!-- Select Basic -->
               <div class="form-group">
                <label class="col-md-4 control-label" for="campos">Listar produtos por:</label>
                  <div class="col-md-5">
                    <select name="campo" class="form-control">
                      <option value="descricao">Nome</option>
                      <option value="valor">Valor</option>
                      <option value="categoria_id">Categorias</option>
                      <option value="fornecedor_id">Fornecedor</option>
                     
                    </select>
                    {{ Form::text('valor', Input::old('valor'), array('class' => 'form-control input-md')) }}
                  </div>
                   <input type="submit" value="Pesquisar" class="btn btn-sm btn-primary" />
                </div>

                         
              {{ Form::close() }}




          </div>
        </div><!-- /painel -->

       
    </div><!-- /table -->


      <hr>
      
      <div class="row">
          <div class="panel panel-primary filterable">
              <div class="panel-heading">
                  <h3 class="panel-title">Lista</h3>
                  <div class="pull-right">
                   
                  </div>
              </div>
              <table class="table" id="mytable" >
                  <thead>
                      <tr class="filters">
                          @if(isset($colunas))
                          
                            <th>{{ $colunas['id'] }}</th>
                            <th>{{ $colunas['nome'] }}</th>
                            <th>{{ $colunas['campo'] }}</th>
                            
                         
                          @endif
                      </tr>
                  </thead>
                  <tbody>
                    @if(isset($resultados))
                    @foreach ($resultados as $rst )
                    <tr class="filters">
                      <th>{{ $rst->id }}</th>
                      <th>{{ $rst->nome }}</th>
                      <th>{{ $rst->$colunas['campo'] }}</th>
                    </tr>
                    @endforeach
                    @endif
                      
                  </tbody>
              </table>

          </div>
          
      </div>
  </div>


@stop

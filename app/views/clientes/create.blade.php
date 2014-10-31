@extends('layouts.dashboard')
@section('head')
  @parent
    <title>cPanel - Cliente Editar</title>

  @stop
@section('conteudo')

    @if (isset($errors))
      @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
          {{ $error }}
        </div>
      @endforeach
    @endif

  	<div class="table">

  	{{ Form::open([
      "route" => "cliente_store",
      "autocomplete" => "off",
      "class" => "form-horizontal"
    ]) }}
              
                <!-- Form Name -->
                <h3>Adicionar cliente </h3>
                
                <div class="panel panel-success"><!-- painel-->
                  <div class="panel-heading">
                    <h3 class="panel-title text-center">DADOS CADASTRAIS</h3>
                  </div>
                  <div class="panel-body">

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="Nome">Nome e Sobrenome:</label>  
                      <div class="col-md-5">
                        {{ Form::text('nome', isset($cliente->nome) ? $cliente->nome : Input::old('nome'), array('class' => 'form-control input-md')) }}
                      </div>
                    </div>

                     <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="RG">Número Identidade:</label>  
                      <div class="col-md-5">
                        {{ Form::text('rg', isset($cliente->rg) ? $cliente->rg : Input::old('rg'), array('class' => 'form-control input-md')) }}
                      </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="CPF">Número CPF:</label>  
                      <div class="col-md-5">
                        {{ Form::text('cpf', isset($cliente->cpf) ? $cliente->cpf : Input::old('cpf'), array('class' => 'form-control input-md cpf')) }}
                      </div>
                    </div>

                    <!-- Multiple Radios (inline) -->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="genero">Sexo :</label>
                      <div class="col-md-4"> 
                        @if( isset($cliente->sexo) ? $cliente->sexo : Input::old('sexo') and $cliente->sexo == "Masculino")
      	                  <label class="radio-inline" for="masculino">
      	                    <input type="radio" name="sexo" value="Masculino" checked="checked" />
      	                    Masculino
      	                  </label>
      	                  <label class="radio-inline" for="feminino">
      	                    <input type="radio" name="sexo" value="Feminino" />
      	                    Feminino
      	                  </label>
                        @else
                        	<label class="radio-inline" for="feminino">
                            <input type="radio" name="sexo" value="Feminino" checked="checked" />
                            Feminino
                          </label>
                          <label class="radio-inline" for="masculino">
                            <input type="radio" name="sexo" value="Masculino" />
                            Masculino
                          </label>
                          
                        @endif
                      </div>
                    </div>

                     <!-- Select Basic -->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="civil">Estado Civil :</label>
                      <div class="col-md-2">
                        <select id="civil" name="civil" class="col-md-12">
                          <option value="Solteiro">Solteiro</option>
                          <option value="Casado">Casado</option>
                          <option value="Viuvo">Viúvo</option>                    
                        </select>
                      </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="Telefoe">Número Telefone:</label>  
                      <div class="col-md-5">
                        {{ Form::text('phone', isset($cliente->phone) ? $cliente->phone : Input::old('phone'), array('class' => 'form-control input-md phone')) }}
                      </div>
                    </div>

                   <hr> 
                  
                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="Email">E-mail:</label>  
                      <div class="col-md-5">
                        {{ Form::text('email', isset($cliente->email) ? $cliente->email : Input::old('email'), array('class' => 'form-control input-md')) }}
                      </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="Usuario">Nome de Usuário:</label>  
                      <div class="col-md-5">
                        {{ Form::text('username', isset($cliente->username) ? $cliente->username : Input::old('username'), array('class' => 'form-control input-md')) }}
                      </div>
                    </div>

                    


                  </div>
                </div><!-- / painel-->
                

                <!-- Button (Double) -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="cadastrar"></label>
                  <div class="col-md-8">
                    <input type="submit" value="Adicionar" class="btn btn-sm btn-primary" />
                    {{ HTML::linkRoute('clientes', 'Cancelar', array(), array('class' => 'btn btn-sm btn-danger')) }}
                  </div>
                </div>


               

              
        {{ Form::close() }}
  </div>
@stop

@section('scripts')

  <script type="text/javascript">
      /*
      Please consider that the JS part isn't production ready at all, I just code it to show the concept of merging filters and titles together !
      */
      $(document).ready(function(){
        //mascara para exibição jquery
          $('.phone').mask('(00) 0000-0000');
          $('.cpf').mask('000.000.000-00');
      });
  </script>
@stop


		
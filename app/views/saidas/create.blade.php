@extends('layouts.dashboard')
  @section('head')
      @parent
      <title>cPanel - Produtos Adicionar</title>
  @stop
 @section('conteudo')

    <!-- Exibir erros -->
    @if (isset($errors))
      @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
          {{ $error }}
        </div>
      @endforeach
    @endif

    <div class="table">
      {{ Form::open([
        "route" => "saida_store",
        "autocomplete" => "off",
        "class" => "form-horizontal"
      ]) }}

        <!-- Form Name -->
        <h3>Adicionar Saida </h3>

        <div class="panel panel-success"><!-- painel-->
          <div class="panel-heading">
            <h3 class="panel-title text-center">DADOS CADASTRAIS</h3>
          </div>
          <div class="panel-body">

          <!-- Select Basic -->
             <div class="form-group">
              <label class="col-md-4 control-label" for="cliente">Cliente :</label>
                <div class="col-md-5 input-group">
                  <select id="cliente" name="cliente" class="form-control">
                    <option value=" ">...</option>
                    @foreach($clientes as $cliente)
                      <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                    @endforeach
                  </select>
                  <div class="input-group-btn">
                      <a class="btn btn-sm btn-success pull-right" href="{{ URL::route('cliente_add') }}"><i class="glyphicon glyphicon-plus"></i></a>
                  </div>
                </div>
              </div>


              <!-- Select Basic -->
             <div class="form-group">
              <label class="col-md-4 control-label" for="produto">Produto :</label>
                <div class="col-md-5 input-group">
                  <select id="produto" name="produto" class="form-control">
                    <option value=" ">...</option>
                    @foreach($produtos as $produto)
                      <option value="{{ $produto->id }}">{{ $produto->nome }}</option>
                    @endforeach
                  </select>
                  <div class="input-group-btn">
                      <a class="btn btn-sm btn-success pull-right" href="{{ URL::route('produto_add') }}"><i class="glyphicon glyphicon-plus"></i></a>
                  </div>
                </div>
              </div>

               <!-- Select Basic -->
             <div class="form-group">
              <label class="col-md-4 control-label" for="status">Status :</label>
                <div class="col-md-5 input-group">
                  <select id="status" name="status" class="form-control">
                    <option value=" ">...</option>
                    <option value="1">Pendente</option>
                    <option value="2">Concluido</option>
                    
                  </select>
                  
                </div>
              </div>
            



            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="Valor">Valor: </label>
              <div class="col-md-5">
                {{ Form::text('valor', Input::old('valor'), array('class' => 'form-control input-md')) }}
              </div>
            </div>




          </div>
        </div><!-- /painel -->

        


        <!-- Button (Double) -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="cadastrar"></label>
          <div class="col-md-8">
            <input type="submit" value="Adicionar" class="btn btn-sm btn-primary" />
            {{ HTML::linkRoute('saidas', 'Cancelar', array(), array('class' => 'btn btn-sm btn-danger')) }}
          </div>
        </div>




       {{ Form::close() }}
    </div><!-- /table -->

@stop

@section('scripts')

<script type="text/javascript">
  $(document).ready(function(){
    $('.phone').mask('(00) 0000-0000');
    $('.valor').mask('0000,00', {reverse: true});
  });
</script>
@stop
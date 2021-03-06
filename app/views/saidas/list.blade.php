 @extends('layouts.dashboard')

 @section('head')
      @parent
      <title>cPanel - Saidas Listar</title>
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
	    <h3>Lista de Saidas </h3>

	    <hr>
	    
	    <div class="row">
	        <div class="panel panel-success filterable">
	            <div class="panel-heading">
	                <h3 class="panel-title">Saidas</h3>
	                <div class="pull-right">
	                	<a href="{{ URL::route('saida_add') }}" class="btn btn-success btn-xs add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Adicionar</a>
	                    <button class="btn btn-default btn-xs btn-filter "><span class="glyphicon glyphicon-filter"></span> Filter</button>
	                </div>
	            </div>
	            <table class="table" id="mytable" >
	                <thead>
	                    <tr class="filters">
	                        <th><input type="text" class="form-control" placeholder="#" disabled></th>
	                        <th><input type="text" class="form-control" placeholder="Cliente" disabled></th>
	                        <th><input type="text" class="form-control" placeholder="Produto" disabled></th>
	                        <th><input type="text" class="form-control" placeholder="Valor" disabled></th>
	                        <th><input type="text" class="form-control" placeholder="Status" disabled></th>
	                        <th><input type="text" class="form-control" placeholder="Funcionario" disabled></th>
	                        <th colspan="2">Ações</th>
	                    </tr>
	                </thead>
	                <tbody>
	                		@if(Auth::check())
	                			@foreach($saidas as $saida)

								<tr class="text-center">
									<td>{{ $saida->id }}</td>
									<td>{{ $saida->cliente->nome }}</td>
									<td>{{ $saida->produto->nome }}</td>
									<td>{{ $saida->valor }}</td>
									<td>{{ $saida->status->descricao }}</td>
									<td>{{ $saida->funcionario->nome }}</td>
									
									<td>
										{{ HTML::linkRoute('saida_edit', 'Edit', array($saida->id), array('class' => 'btn btn-primary btn-xs')) }}
									</td>
	                        		<td>
	                        			{{ HTML::linkRoute('saida_delete', 'Excl', array($saida->id), array('class' => 'btn btn-danger btn-xs confirm', 'data-confirm' => 'Você realmente deseja excluir o registro?')) }}
	                        			
	                        		</td>
								</tr>
							
								@endforeach
							@endif

	                </tbody>
	            </table>

	        </div>
	        {{ '<span class="badge pull-right">Registros '.$qtd.'</span>' .$saidas->links()  }}
	    </div>
	</div>


@stop

@section('scripts')

<script type="text/javascript">
			(function($){
				$('.confirm').on('click', function() {
					return confirm($(this).data('confirm'));
				});
			}(jQuery));
			
			$(document).ready(function(){
 				  
 				  //mascara para exibição jquery
				  $('.phone').mask('(00) 0000-0000');
				  

			    $('.filterable .btn-filter').click(function(){
			    	var $panel = $(this).parents('.filterable'),
			        $filters = $panel.find('.filters input'),
			        $tbody = $panel.find('.table tbody');
			        if ($filters.prop('disabled') == true) {
			            $filters.prop('disabled', false);
			            $filters.first().focus();
			        } else {
			            $filters.val('').prop('disabled', true);
			            $tbody.find('.no-result').remove();
			            $tbody.find('tr').show();
			        }
			    });

			    $('.filterable .filters input').keyup(function(e){
			        /* Ignore tab key */
			        var code = e.keyCode || e.which;
			        if (code == '9') return;
			        /* Useful DOM data and selectors */
			        var $input = $(this),
			        inputContent = $input.val().toLowerCase(),
			        $panel = $input.parents('.filterable'),
			        column = $panel.find('.filters th').index($input.parents('th')),
			        $table = $panel.find('.table'),
			        $rows = $table.find('tbody tr');
			        /* Dirtiest filter function ever ;) */
			        var $filteredRows = $rows.filter(function(){
			            var value = $(this).find('td').eq(column).text().toLowerCase();
			            return value.indexOf(inputContent) === -1;
			        });
			        /* Clean previous no-result if exist */
			        $table.find('tbody .no-result').remove();
			        /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
			        $rows.show();
			        $filteredRows.hide();
			        /* Prepend no-result row if all rows are filtered */
			        if ($filteredRows.length === $rows.length) {
			            $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">No result found</td></tr>'));
			        }
			    });


			});

		</script>
@stop
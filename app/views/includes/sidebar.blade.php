<nav class="nav-sidebar">
	<ul class="nav">
	  <li class="nav-header"></li>
	  <li><a href="{{ URL::route('produtos') }}"><i class="glyphicon glyphicon-barcode"></i> Produtos</a></li>
	  <li><a href="{{ URL::route('categorias') }}"><i class="glyphicon glyphicon-paperclip"></i> Categorias</a></li>
	  <li><a href="{{ URL::route('funcionarios') }}"><i class="glyphicon glyphicon-user"></i> Funcionários</a></li>
	  <li><a href="{{ URL::route('clientes') }}"><i class="glyphicon glyphicon-user"></i> Clientes</a></li>
	  <li><a href="{{ URL::route('fornecedores') }}"> <i class="glyphicon glyphicon-shopping-cart"></i> Fornecedores</a> </li>
	  <li><a href="{{ URL::route('saidas') }}"><i class="glyphicon glyphicon-list-alt"></i> Saidas</a></li>
	</ul>
</nav>

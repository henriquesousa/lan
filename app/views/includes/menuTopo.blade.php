    <div class="navbar navbar navbar-fixed-top" role="navigation" >
      <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-bootsnipp-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <div class="animbrand">

            @if(Auth::check())
              {{ HTML::link('admin/index', 'Lan', array('class' => 'navbar-brand')) }}
            @else
              {{ HTML::link('login', 'Lan', array('class' => 'navbar-brand')) }}
            @endif

        </div>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="navbar-collapse navbar-bootsnipp-collapse collapse" style="height: 1px;">
        <ul class="nav navbar-nav">
          
          <li class="dropdown ">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Opções<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li>{{ HTML::linkRoute('funcionario_add', 'Funcionários') }}</li>

                @if(Auth::check())
                  <li>{{ HTML::linkRoute('cliente_add', 'Clientes') }}</li>
                  <li class="divider"></li>
                  <li>{{ HTML::linkRoute('fornecedor_add', 'Fornecedores') }}</li>
                  <li>{{ HTML::linkRoute('produto_add', 'Produtos') }}</li>
                @endif

            </ul>
          </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          
          @if(Auth::check())
            <li id="nav-login-btn" class="">{{ HTML::link('logout', 'Sair') }}</li>
          @else
            <li id="nav-register-btn" class="">{{ HTML::linkRoute('funcionario_add', 'Registre-se') }}</li>
            <li id="nav-login-btn" class="">{{ HTML::link('login', 'Login') }}</li>
          @endif
        </ul>
      </div><!-- /.navbar-collapse -->
      </div>
    </div>
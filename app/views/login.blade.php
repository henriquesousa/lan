
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>Login Sistema</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
        
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link rel="shortcut icon" href="/bootstrap/img/favicon.ico">
        <link rel="apple-touch-icon" href="/bootstrap/img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/bootstrap/img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/bootstrap/img/apple-touch-icon-114x114.png">

        <!-- JavaScript jQuery code from Bootply.com editor  -->
        <script src="{{ asset('js/gAnalitics.js') }}"></script>
        <script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>


        <!-- CSS code from Bootply.com editor -->
        
        <style type="text/css">
            .modal-footer {   border-top: 0px; }
        </style>
    </head>
    
    <!-- HTML code from Bootply.com editor -->
    
    <body  >


    

    <div class="container">
        <div class="row vertical-offset-100">
          <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Please sign in</h3>
            </div>
              <div class="panel-body">
                {{ Form::open(array('route' => 'logon')) }}
                        <fieldset>
                    <div class="form-group">
                      <input class="form-control" placeholder="E-mail" name="email" type="text">
                  </div>
                  <div class="form-group">
                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                  </div>
                  <div class="checkbox">
                      <label>
                        <!--login erros-->
                          @if (isset($errors))
                            @foreach($errors->all() as $error)
                              <div class="alert alert-danger" role="alert">
                                {{ $error }}
                              </div>
                            @endforeach
                          @endif
                      <!--login erros-->
                      </label>
                    </div>
                      
                      <input class="btn btn-lg btn-success btn-block" type="submit" value="Entrar">
                      <span class="pull-right">{{ HTML::linkRoute('funcionario_add', 'Registre-se') }}</span>
                      <span>{{ HTML::link('sobre', 'Precisa de Ajuda?', array('id' => '')) }}</span>
                </fieldset>
                 {{ Form::close() }}
              </div>
          </div>
        </div>
      </div>
    </div>


        <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type='text/javascript' src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>   
    </body>
</html>
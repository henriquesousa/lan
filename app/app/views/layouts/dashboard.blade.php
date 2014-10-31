<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        
        <meta name="generator" content="Lanhouse" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
         
        
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link rel="shortcut icon" href="/bootstrap/img/favicon.ico">

        <script src="{{ asset('js/jquery.1.10.2.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/formMasc.js') }}"></script>

        <style type="text/css">
          .nav-sidebar { 
              width: 100%;
              padding: 8px 0; 
              border-right: 1px solid #ddd;
          }
          .nav-sidebar a {
              color: #333;
              -webkit-transition: all 0.08s linear;
              -moz-transition: all 0.08s linear;
              -o-transition: all 0.08s linear;
              transition: all 0.08s linear;
              -webkit-border-radius: 4px 0 0 4px; 
              -moz-border-radius: 4px 0 0 4px; 
              border-radius: 4px 0 0 4px; 
          }
          .nav-sidebar .active a { 
              cursor: default;
              background-color: #428bca; 
              color: #fff; 
              text-shadow: 1px 1px 1px #666; 
          }
          .nav-sidebar .active a:hover {
              background-color: #428bca;   
          }
          .nav-sidebar .text-overflow a,
          .nav-sidebar .text-overflow .media-body {
              white-space: nowrap;
              overflow: hidden;
              -o-text-overflow: ellipsis;
              text-overflow: ellipsis; 
          }
        </style>

        <!-- CSS code from Bootply.com editor -->
        
        @yield('head')
    </head>
    
    <body>
        
        
  <!-- Fixed navbar -->
  @include('includes.menuTopo')
  <!--/.nav-collapse -->
  
<!-- HEADER 
=================================-->

<div class="jumbotron text-center">
    <div class="container">
      <div class="row">
        <div class="col col-lg-12 col-sm-12">
         
          
          
        </div>
      </div>
    </div> 
</div>
<!-- /header container-->

<!-- CONTENT
=================================-->
<div class="container"><!-- /container -->
    
    <div class="row"><!-- row -->
        <div class="col-md-3">
          <!-- Sidebar -->
          @include('includes.sidebar')
                  
        </div>
        <!-- /Sidebar -->
        
        <div class="col-md-9">
        <!-- Conteudo -->
          @yield('conteudo')
          
        </div>
  </div><!-- /row -->
</div><!-- /container -->
  

<hr>
   
    @yield('scripts')

  </body>
</html>
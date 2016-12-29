<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administracion Turismo Puyehue</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="{{asset('css/wisard.css')}}" rel="stylesheet" type="text/css">
    <link href="css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
  <script src="js/wizard.js" type="text/javascript"></script>
    <script src="js/fileinput.js" type="text/javascript"></script>

  @yield('head')


</head>

<body>

    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"> <i><img src="img/Logo.png" alt="IMGPuyehue" width="50px"></i>Municipalidad de Puyehue</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img  src="{{ Auth::user()->pathImg }}" alt="" style="width:30px; border-radius:10%; max-height:20px;"> {{ Auth::user()->name }}  <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i>Perfil</a>
                        </li>
                        <li>
                            <a href="{{ url('/logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                         <i class="fa fa-fw fa-power-off"></i>
                                Salir
                            </a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>


                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="sidebar-nav">
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li class="active">
                            <a href="index.html"><i class="glyphicon glyphicon-home"></i> Home</a>
                        </li>

                        <li class="dropdown">
                            <a href="search" class="dropdown-toggle" data-toggle=""><i class="fa fa-fw fa-search"></i>Buscar documento<span class=""></span></a>

                        </li>
                        <li class="dropdown">
                            <a href="subirdoc" class="dropdown-toggle" data-toggle=""><i class="fa fa-fw fa-folder-open"></i>Subir documento<span class=""></span></a>

                        </li>
                        <li class="dropdown">
                            <a href="users" class="dropdown-toggle" data-toggle=""><i class="fa fa-fw fa-user"></i>Gestion de usuarios<span class=""></span></a>

                        </li>
                        <li class="dropdown">
                            <a href="crudUnidades" class="dropdown-toggle" data-toggle=""><i class="fa fa-fw fa-cog"></i>Gestion de unidades <span class=""></span></a>

                        </li>
                        <li class="dropdown">
                            <a href="crudDepartamentos" class="dropdown-toggle" data-toggle=""><i class="fa fa-fw fa-cog"></i>Gestion de Dpto.<span class=""></span></a>

                        </li>
                        <li class="dropdown">
                            <a href="perfil" class="dropdown-toggle" data-toggle=""><i class="fa fa-fw fa-user"></i>Mi Perfil<span class=""></span></a>

                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle=""><i class="fa fa-fw fa-signal"></i> Control de Turistas<span class=""></span></a>

                        </li>


                         <li class="dropdown">
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-signal"></i> Control De Eventos<span class="caret"></span></a>
                             <ul class="dropdown-menu" role="menu">
                                <li class="dropdown-header">Configurar</li>
                                <li><a href="CrearEvento.html" class="link-load">Crear Evento</a></li>
                                <li><a href="EstadisticaEvento.html" class="link-load">Dashboard Eventos</a></li>
                                <li><a href="#" class="link-load">...</a></li>
                            </ul>
                         </li>


                    </ul>
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">
                <div class="pageheader">
                <h2><i class="fa fa-home"></i> Inicio <span>SELECCIONE LAS OPCIONES PARA CREAR Y CARGAR UN NUEVO EVENTO</span></h2>
                    <div class="breadcrumb-wrapper">
                        <span class="label">Estás aquí : </span>
                        <ol class="breadcrumb">
                            <li><a href="index.html">Inicio</a></li>
                            <li class="active">Bandeja de entrada</li>
                        </ol>
                    </div>
                </div>
  <div class="container-fluid">
     <div class="contentpanel">
         <div class="panel panel-default">
            <div class="panel-body">










@yield('content')























            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/moment-with-locales.js"></script>
    <script src="js/bootstrap-datetimepicker.js"></script>



    <script>
    $(function () {
                $('.date').datetimepicker({    locale: 'es'});
            });
</script>
</body>

</html>

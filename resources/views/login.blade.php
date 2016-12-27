<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.scss')}}">
<link href="https://fonts.googleapis.com/css?family=PT+Sans|Ubuntu:400,500" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://code.jquery.com/jquery-2.2.4.min.js">
</head>
<body>
  <div class="wrapper">
    <div class="background">
      <div class="left">
        <h2 class="back-header">¿Aún no tienes una cuenta?</h2>
        <p class="back-p">Tienes que registrarte hoy!</p>
        <button class="back-btn signup-but">REGISTRARME</button>
      </div>
      <div class="right">
        <h2 class="back-header">¿Ya tienes una cuenta?</h2>
        <p class="back-p">Bien, ingresa ahora mismo!</p>
        <button class="back-btn login-but">INGRESAR</button>
      </div>
    </div>
    <div class="form-container">
      <div class="sign-up">
        <h2 class="form-header">Regístrate</h2>
        <input type="text" id="user" placeholder="Enter Full Name"><i class="fa fa-user"></i></input>
        <input type="text" id="user" placeholder="Enter Full Name"><i class="fa fa-user"></i></input>
        <input type="text" id="email" placeholder="Email" autocomplete="off"><i class="fa fa-envelope-o"></i></input>
        <input type="password" id="pass" placeholder="Password" autocomplete="off"><i class="fa fa-lock"></i></input>
        <button class="form-btn">REGISTRAR</button>
      </div>
      <div class="login hide">

        <form class="" action="{{ url('/login') }}" method="post" autocomplete="off">
            {{ csrf_field() }}
        <h2 class="form-header">Ingresar</h2>
        <input type="text" name="email" id="email" placeholder="Email"><i class="fa fa-envelope-o"></i></input>
        <input type="password" id="pass" placeholder="Password"><i class="fa fa-lock"></i></input>
        <button class="form-btn">ENTRAR</button>
        <a class="forgot" href="#">Recuperar contraseña</a>
  </form>
      </div>
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <script src="{{asset('js/login.js')}}"></script>
</body>
</html>

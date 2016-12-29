<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Confirmacion de registro</title>
</head>
<body>
    <h1>Gracias por registrarse!</h1>

    <p>
        Necesitamos que <a href='{{ url("register/confirm/{$user->token}") }}'>confirme su correo electronico</a> pinche aquí!
    </p>
</body>
</html>

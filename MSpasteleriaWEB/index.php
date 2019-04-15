<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MS Pasteleria | Login</title>
    <link rel="stylesheet" href="CSS/master.css">
</head>

<body>
    <div class="login-box">
        <img src="Img/logo.png" class="avatar" alt="Avatar Image">
        <h1>Login</h1>
        <form name="Log" method="post" action="Principal.html" >
            <!-- USERNAME INPUT -->
            <label for="Correo">Correo electronico</label>
            <input type="text" name="vUser" id="vUser" placeholder="ejemplo@ejemplo.com">
            
            <!-- PASSWORD INPUT -->
            <label for="password">Contraseña</label>
            <input type="password" name="vPass" id="vPass" placeholder="Contraseña">
            <input type="submit" value="Log In">
            
            <a href="">Perdi mi contraseña</a><br>
            <a href="http://localhost/MSpasteleriaWEB/AltaUsuario.html">Crear usuario</a>
        </form>
    </div>   
</body>
</html>
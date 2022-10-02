<?php
session_start();
$_SESSION['tipo'] = null;

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <section class="container">
        <div class="card">
            <div class="img">
                <img src="./img/login.png" alt="enfermera">
            </div>
            <form action="./function/checkPassword.php" method="post" class="datos">
                    <div class="texto">
                        <p class="p1">Usuario:</p>
                        <input class="campos" name="user" type="text" placeholder="Ejemplo: juan-123" minlength="5" maxlength="10" required>
                        <p class="p1">Contraseña:</p>
                        <input class="campos" name="password" type="password" placeholder="*****" minlength="8" maxlength="16" required>
                    </div>
                    <div class="botones">
                        <button  type="button" class="btn-registro" onclick= "location = './page/registrar-usuario.html'"><p>Registro</p></button>
                        <button type="submit" class="btn-registro"><p>Entrar</p></button>
                    </div>
            </form>
        </div>
    </section>
</body>
</html>
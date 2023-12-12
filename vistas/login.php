<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sesiones</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="public/css/styles2.css">
</head>
<body>
    <div class="Iniciarsesion">
        <form action=""  method="POST">
        <?php
            if(isset($errorLogin)){
                echo $errorLogin;
                
            }
        ?>
            <h1>Iniciar sesion</h1>
            <div class="registro">
                <input type="text" placeholder="Usuario" required  name="username">
                <i class='bx bxs-user'></i>
            </div>
            <div class="registro">
                <input type="password" placeholder="Contraseña" required  name="password">
                <i class='bx bxs-lock-alt' ></i>
            </div>
            <button type="submit" class="iniciar">Iniciar</button>

            <div class="Registrar">
                <p>No tienes cuenta? <a href="vistas/registros.php">Registrarte</a></p>
            </div>
            <div class="Registrar">
                <p>Revisa nuestra <a href="index.php">pagina</a></p>
            </div>
        </form>
    </div>
</body>
</html>
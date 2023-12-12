<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/css/styles2.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <?php
        include('../includes/db.php');
        
    ?>
    <div class="Iniciarsesion">
        <form action="../includes/registro_usuario.php" method="POST">
            <h1>Registrar</h1>
            <div class="registro">
                <input type="text" placeholder="Nombre" required  name="nombre">
                <i class='bx bxs-user'></i>
            </div>
            <div class="registro">
                <input type="text" placeholder="Usuario" required  name="username">
                <i class='bx bxs-user'></i>
            </div>
            <div class="registro">
                <input type="password" placeholder="Contraseña" required  name="password">
                <i class='bx bxs-lock-alt' ></i>
            </div>
            <button type="submit" class="iniciar"  name="agregar">crear</button>
            <div class="Registrar">
                <p>Ya tienes cuenta <a href="../inicio.php">Iniciar sesion</a></p>
            </div>
        </form>
    </div>
</body>
</html>
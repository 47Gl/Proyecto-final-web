<?php 
    session_start();
    include_once("./db.php");

    if (isset($_POST['agregar'])) {
        $database = new conexion();
        $db = $database->open();
        $nombre = $_POST['nombre'];
        $user = $_POST['username'];
        $psw= $_POST['password'];
        try {
            $stmt = $db->prepare("INSERT INTO usuarios (nombre,username,password) VALUES ('$nombre','$user','$psw')");

            $_SESSION['message']=($stmt ->execute()?'Nombre guardado exitosamente':'Algo salio mal');
            //echo'todo salio bien';
        }
        catch (PDOException $e) {
        $_SESSION['message'] = $e-> getMessage();
        echo 'error', $e;
        }
        $database->close();
    }
    else {
        echo'llene todos los datos';
    }    
    header("Location: ../inicio.php");
?>
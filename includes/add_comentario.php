<?php 
    session_start();
    include_once("./db.php");

    if (isset($_POST['agregar'])) {
        $database = new conexion();
        $db = $database->open();
        $Comentario = $_POST['nombre'];
        try {
            $stmt = $db->prepare("INSERT INTO Opiniones (Comentario) VALUES ('$Comentario')");


            $_SESSION['message']=($stmt ->execute()?'comentario guardado exitosamente':'Algo salio mal');
            echo'Comentario agregado exitosamente';

         
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
    ?>
<?php
session_start();
include_once("db.php");
if (isset($_POST["id"])) {
    $id = $_POST["id"];
    $database = new conexion();
    $db = $database->open();
    try {
        $stmt = $db->prepare("DELETE FROM Opiniones WHERE IiOpinion = $id");
        $_SESSION['message']=($stmt ->execute() ?'comentario eliminado exitosamente':'Algo salio mal');
        echo'Comentario eliminado exitosamente';

    } catch (PDOException $e) {
        $_SESSION['message'] = $e-> getMessage();
    }
    $database->close();
}
else {
    $_SESSION['message'] == 'Error';
}

?>
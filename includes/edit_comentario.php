<?php
session_start();
include_once("./db.php");
if (isset($_POST["editar"])) {
    $id = $_POST["id2"];
    $nombre = $_POST["nombres"];
    $database = new conexion();
    $db = $database->open();
    try {
        $stmt = $db->prepare("UPDATE Opiniones SET Comentario = '$nombre' WHERE IiOpinion = $id");
        $_SESSION['message']=($stmt ->execute() ?'coemntario editado exitosamente':'Algo salio mal');
        echo'Comentario editado exitosamente';

    } catch (PDOException $e) {
        $_SESSION['message'] = $e-> getMessage();
    }
    $database->close();
}
else {
    $_SESSION['message'] == 'Error';
}
?>
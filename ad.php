<?php
include_once './includes/user.php';
include_once './includes/adm.php';

 $userAdm= new UserSes();
$use= new Administrador();

//Administrador
if(isset($_SESSION['use'])){
    //echo "hay sesion";
    $use->setUse($userAdm->getCurrentUser());
    include_once './indexAd.php';

}else if(isset($_POST['username']) && isset($_POST['password'])){
    //echo "validadcion de logi";
    $useForm = $_POST['username'];
    $passForm = $_POST['password'];

 
    if($use->AdministradorExistst($useForm, $passForm)){
        //echo "usuario validado";
        $userAdm->setCurrentUser($useForm);
        $use->setUse($useForm);

        include_once './indexAd.php';

      
    }else{
        //echo "Nombre de usuario o password incorrecto";
        $errorLogin = "Nombre de usuario y/o password incorrecto";
        include_once './vistas/login.php';
        
    }
}else{
    //echo "login";
    include_once './vistas/login.php';
}

?>
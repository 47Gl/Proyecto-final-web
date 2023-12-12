<?php
include_once './includes/user.php';
include_once './includes/user_session.php';

$userSession = new UserSession();
$user = new User();
 

if(isset($_SESSION['user'])){
    //echo "hay sesion";
    $user->setUser($userSession->getCurrentUser());
    include_once './indexSe.php';

}else if(isset($_POST['username']) && isset($_POST['password'])){
    //echo "validadcion de logi";
    $userForm = $_POST['username'];
    $passForm = $_POST['password'];

 
    if($user->userExists($userForm, $passForm)){
        //echo "usuario validado";
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);

        include_once './indexSe.php';

      
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
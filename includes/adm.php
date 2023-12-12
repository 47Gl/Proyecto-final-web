<?php

class UserSes{

    

    public function setCurrentUser($use){
        $_SESSION['use'] = $use;
    }

    public function getCurrentUser(){
        return $_SESSION['use'];
    }

    public function closeSession(){
        session_unset();
        session_destroy();
    }
}

?>
<?php
include 'db.php';

class User extends conexion{
    private $nombre;
    private $username;

    public function userExists($user, $pass){
        //se elimino  $md5pass = md5($pass);
          $query = $this->open()->prepare('SELECT * FROM usuarios WHERE username = :user AND password = :pass');
      //se reemplaza $md5pass por $pass
          $query->execute(['user' => $user, 'pass' => $pass]);
          if($query->rowCount()){
              return true;
          }else{
              return false;
          }
      }
  

    public function setUser($user){
        $query = $this->open()->prepare('SELECT * FROM usuarios WHERE username = :user');
        $query->execute(['user' => $user]);
        
        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['nombre'];
            $this->username = $currentUser['username'];
        }
    }

    public function getNombre(){
        return $this->nombre;
    }


}

class Administrador extends conexion{
    private $nom;
    private $usern;


   //Administrador
   public function AdministradorExistst($user, $pass){
    //se elimino  $md5pass = md5($pass);
    $query = $this->open()->prepare('SELECT * FROM administrador WHERE username = :user AND password = :pass');
    //se reemplaza $md5pass por $pass
        $query->execute(['user' => $user, 'pass' => $pass]);
        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    
}
public function setUse($user){
    $query = $this->open()->prepare('SELECT * FROM administrador WHERE username = :user');
    $query->execute(['user' => $user]);
    
    foreach ($query as $currentUser) {
        $this->nom = $currentUser['nombre'];
        $this->usern = $currentUser['username'];
    }
}

public function getNom(){
    return $this->nom;
}
}


?>
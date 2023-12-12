<?php
    class conexion{
        private $server = "mysql:host=localhost; dbname=Penjamo_opina";
        private $username = "Luis";
        private $password = "Mango1020";
        private $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
        protected $conn;
        public function open(){
            try {
                $this->conn = new PDO($this->server, $this->username, $this->password, $this->options);
                //echo"Conexion exitosa";
                return $this->conn;


            } catch (PDOException $e) {
                echo "hubo un error" . $e->getPrevious();
            }
        }
        public function close(){ 
            $this->conn = null;
        }
    }
    $database=new conexion();
    $b=$database->open();  

  ?>  
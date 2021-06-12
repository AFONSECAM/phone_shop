<?php
    include_once ("C:/xampp/htdocs/phone_store/includes/class_conection.php");

    class Battery extends Conection{
        public $capacidad;
        public $conexion_bd;

        function __construct()
        {            
            $this->conexion_bd = new Conection();
            $this->conexion_bd = $this->conexion_bd->connect();            
        }

        function createBatery($cap){    
            $query = "INSERT INTO tb_battery (capacity) VALUES(?)";
            $insert = $this->conexion_bd->prepare($query);
            $data = array($cap);        
            $insert->execute($data);                       
        }
    }
?>
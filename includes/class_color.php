<?php

include_once  ("C:/xampp/htdocs/phone_store/includes/class_conection.php");

class Color extends Conection{

    private $color;
    private $conexion_bd;

    function __construct(){
        $this->conexion_bd = new Conection();
        $this->conexion_bd = $this->conexion_bd->connect();
    }

    function crear_color($col){
        $this->color = $col;
        $query = "INSERT INTO tb_color (color_name) VALUES(?)";
        $insert = $this->conexion_bd->prepare($query);
        $data = array($col);        
        $insert->execute($data); 
    }

   
}

?>
<?php
    include_once ("C:/xampp/htdocs/phone_store/includes/class_conection.php");

    class Brand extends Conection{
        private $nombre;
        private $tipo;
        private $conexion_bd;

        function __construct(){
            $this->conexion_bd = new Conection();
            $this->conexion_bd = $this->conexion_bd->connect();
        }

        function createBrand($nombre_form, $tipo_form){
            $this->nombre = $nombre_form;
            $this->tipo = $tipo_form;

            $query = "INSERT INTO tb_brand (brand_name, type) VALUES(?,?);";
            $insert = $this->conexion_bd->prepare($query);
            $data_array = array($this->nombre, $this->tipo);
            $insert->execute($data_array);
            $last_id = $this->conexion_bd->lastInsertId();
            return $last_id;
        }
    }
?>
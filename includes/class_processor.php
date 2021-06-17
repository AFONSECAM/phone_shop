<?php

include_once("class_conection.php");

class processor extends Conection
{

    private $processor;
    private $conexion_bd;

    function __construct()
    {
        $this->conexion_bd = new Conection();
        $this->conexion_bd = $this->conexion_bd->connect();
    }

    function crear_processor($pro)
    {
        $this->processor = $pro;
        $query = "INSERT INTO tb_processor (processor_name) VALUES(?)";
        $insert = $this->conexion_bd->prepare($query);
        $data = array($pro);
        $insert->execute($data);
    }

    function query_processor()
    {
        $query_processor_2 = "SELECT * FROM tb_processor";
        $query_processor_3 = $this->conexion_bd->prepare($query_processor_2);
        $result = $query_processor_3->fetchall(PDO::FETCH_ASSOC);
        return $result;
    }

    function update_processor($id_processor, $nombre_processor)
    {
        $this->pro = $nombre_processor;


        $query_update_processor = "UPDATE tb_processor SET processor_name ?  WHERE id_processor = $id_processor";
        $query_update_processor_2 = $this->$conexion_bd->prepare($query_update_processor);
        $array_query_processor = array($this->pro);
        $result = $query_update_processor_2->execute($array_query_processor);
        return $result;
    }
}
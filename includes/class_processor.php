<?php

include_once("class_conection.php");

class processor extends Conection
{

    private $processor;
    private $description;
    private $conexion_bd;

    function __construct()
    {
        $this->conexion_bd = new Conection();
        $this->conexion_bd = $this->conexion_bd->connect();
    }

    function crear_processor($pro, $desc)
    {
        $this->processor = $pro;
        $this->description =$desc;

        $query = "INSERT INTO tb_processor (processor_name, description) VALUES(?,?)";
        $insert = $this->conexion_bd->prepare($query);
        $data = array($pro, $desc);
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

        $query_update_processor = "UPDATE tb_processor SET processor_name ? description ? WHERE id_processor = $id_processor";
        $query_update_processor_2 = $this->$conexion_bd->prepare($query_update_processor);
        $array_query_processor = array($this->pro);
        $result = $query_update_processor_2->execute($array_query_processor);
        return $result;
    }
}
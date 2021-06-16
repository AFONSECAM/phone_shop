<?php

include_once("C:/xampp/htdocs/phone_store/includes/class_conection.php");

class op_system extends Conection
{

    private $genero;
    private $conexion_bd;

    function __construct()
    {
        $this->conexion_bd = new Conection();
        $this->conexion_bd = $this->conexion_bd->connect();
    }

    function crear_genero($s_o)
    {
        $this->genero = $s_o;
        $query = "INSERT INTO tb_op_system (op_system_name) VALUES(?)";
        $insert = $this->conexion_bd->prepare($query);
        $data = array($s_o);
        $insert->execute($data);
    }

    function query_op_system()
    {
        $query_op_system_2 = "SELECT * FROM tb_op_system";
        $query_op_system_3 = $this->conexion_bd->prepare($query_op_system_2);
        $result = $query_op_system_3->fetchall(PDO::FETCH_ASSOC);
        return $result;
    }

    function update_op_system($id_op_system, $nombre_op_system)
    {
        $this->s_o = $nombre_op_system;

        $query_update_op_system = "UPDATE tb_op_system SET op_system ? WHERE id_op_system = $id_op_system";
        $query_update_op_system_2 = $this->$conexion_bd->prepare($query_update_op_system);
        $array_query_op_system = array($this->s_o);
        $result = $query_update_op_system_2->execute($array_query_op_system);
        return $result;
    }
}
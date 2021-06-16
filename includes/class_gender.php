<?php

include_once("C:/xampp/htdocs/phone_store/includes/class_conection.php");

class Gender extends Conection
{

    private $genero;
    private $conexion_bd;

    function __construct()
    {
        $this->conexion_bd = new Conection();
        $this->conexion_bd = $this->conexion_bd->connect();
    }

    function crear_genero($gen)
    {
        $this->genero = $gen;
        $query = "INSERT INTO tb_gender (gender_name) VALUES(?)";
        $insert = $this->conexion_bd->prepare($query);
        $data = array($gen);
        $insert->execute($data);
    }

    function query_gender()
    {
        $query_gender_2 = "SELECT * FROM tb_gender";
        $query_gender_3 = $this->conexion_bd->prepare($query_gender_2);
        $result = $query_gender_3->fetchall(PDO::FETCH_ASSOC);
        return $result;
    }

    function update_gender($id_gender, $nombre_gender)
    {
        $this->gen = $nombre_gender;

        $query_update_gender = "UPDATE tb_gender SET gender ? WHERE id_gender = $id_gender";
        $query_update_gender_2 = $this->$conexion_bd->prepare($query_update_gender);
        $array_query_gender = array($this->gen);
        $result = $query_update_gender_2->execute($array_query_gender);
        return $result;
    }
}

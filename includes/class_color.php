<?php

include_once("C:/xampp/htdocs/phone_store/includes/class_conection.php");

class Color extends Conection
{

    private $color;
    private $conexion_bd;

    function __construct()
    {
        $this->conexion_bd = new Conection();
        $this->conexion_bd = $this->conexion_bd->connect();
    }

    function crear_color($col)
    {
        $this->color = $col;
        $query = "INSERT INTO tb_color (color_name) VALUES(?)";
        $insert = $this->conexion_bd->prepare($query);
        $data = array($col);
        $insert->execute($data);
    }

    function query_color()
    {
        $query_color_2 = "SELECT * FROM tb_color";
        $query_color_3 = $this->conexion_bd->prepare($query_color_2);
        $result = $query_color_3->fetchall(PDO::FETCH_ASSOC);
        return $result;
    }

    function update_color($id_color, $nombre_color)
    {
        $this->col = $nombre_color;

        $query_update_color = "UPDATE tb_color SET color ? WHERE id_color = $id_color";
        $query_update_color_2 = $this->$conexion_bd->prepare($query_update_color);
        $array_query_color = array($this->col);
        $result = $query_update_color_2->execute($array_query_color);
        return $result;
    }
}

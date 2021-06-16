<?php

include_once("C:/xampp/htdocs/phone_store/includes/class_conection.php");

class graphic extends Conection
{

    private $genero;
    private $conexion_bd;

    function __construct()
    {
        $this->conexion_bd = new Conection();
        $this->conexion_bd = $this->conexion_bd->connect();
    }

    function crear_genero($gra)
    {
        $this->genero = $gra;
        $query = "INSERT INTO tb_graphic (graphic_name) VALUES(?)";
        $insert = $this->conexion_bd->prepare($query);
        $data = array($gra);
        $insert->execute($data);
    }

    function query_graphic()
    {
        $query_graphic_2 = "SELECT * FROM tb_graphic";
        $query_graphic_3 = $this->conexion_bd->prepare($query_graphic_2);
        $result = $query_graphic_3->fetchall(PDO::FETCH_ASSOC);
        return $result;
    }

    function update_graphic($id_graphic, $nombre_graphic)
    {
        $this->gra = $nombre_graphic;

        $query_update_graphic = "UPDATE tb_graphic SET graphic ? WHERE id_graphic = $id_graphic";
        $query_update_graphic_2 = $this->$conexion_bd->prepare($query_update_graphic);
        $array_query_graphic = array($this->gra);
        $result = $query_update_graphic_2->execute($array_query_graphic);
        return $result;
    }
}

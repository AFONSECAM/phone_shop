<?php
include_once("C:/xampp/htdocs/phone_store/includes/class_conection.php");

class Brand extends Conection
{
    private $nombre;
    private $tipo;
    private $conexion_bd;

    function __construct()
    {
        $this->conexion_bd = new Conection();
        $this->conexion_bd = $this->conexion_bd->connect();
    }

    function createBrand($nombre_form, $tipo_form)
    {
        $this->nombre = $nombre_form;
        $this->tipo = $tipo_form;

        $query = "INSERT INTO tb_brand (brand_name, type) VALUES(?,?);";
        $insert = $this->conexion_bd->prepare($query);
        $data_array = array($this->nombre, $this->tipo);
        $insert->execute($data_array);
        $last_id = $this->conexion_bd->lastInsertId();
        return $last_id;
    }

    function query_brand()
    {
        $query_brand_2 = "SELECT * FROM tb_brand";
        $query_brand_3 = $this->conexion_bd->prepare($query_brand_2);
        $result = $query_brand_3->fetchall(PDO::FETCH_ASSOC);
        return $result;
    }

    function update_brand($id_brand, $nombre_marca)
    {
        $this->mar = $nombre_marca;

        $query_update_brand = "UPDATE tb_brand SET brand_name ? WHERE id_brand = $id_brand";
        $query_update_brand_2 = $this->$conexion_bd->prepare($query_update_brand);
        $array_query_brand = array($this->mar);
        $result = $query_update_brand_2->execute($array_query_brand);
        return $result;
    }
}

<?php

include_once("class_conection.php");

class ram_mem extends Conection{

    private $ram_mem;
    private $conexion_bd;

    function __construct()
    {
        $this->conexion_bd = new Conection();
        $this->conexion_bd = $this->conexion_bd->connect();
    }

    function crear_ram_mem($ram)
    {
        $this->ram_mem = $ram;
        $query = "INSERT INTO tb_ram_memory (ram_capacity) VALUES(?)";
        $insert = $this->conexion_bd->prepare($query);
        $data = array($ram);
        $insert->execute($data);
    }

    function query_ram_mem()
    {
        $query_ram_mem_2 = "SELECT * FROM tb_ram_memory";
        $query_ram_mem_3 = $this->conexion_bd->prepare($query_ram_mem_2);
        $result = $query_ram_mem_3->fetchall(PDO::FETCH_ASSOC);
        return $result;
    }

    function update_ram_mem($id_ram_mem, $nombre_ram_mem)
    {
        $this->ram = $nombre_ram_mem;

        $query_update_ram_mem = "UPDATE tb_ram_memory SET ram_capacity ? WHERE id_ram_memory = $id_ram_mem";
        $query_update_ram_mem_2 = $this->$conexion_bd->prepare($query_update_ram_mem);
        $array_query_ram_mem = array($this->ram);
        $result = $query_update_ram_mem_2->execute($array_query_ram_mem);
        return $result;
    }
}
<?php

include_once("class_conection.php");

class rom_mem extends Conection{

    private $rom_mem;
    private $conexion_bd;

    function __construct()
    {
        $this->conexion_bd = new Conection();
        $this->conexion_bd = $this->conexion_bd->connect();
    }

    function crear_rom_mem($rom)
    {
        $this->rom_mem = $rom;
        $query = "INSERT INTO tb_rom_memory (rom_capacity) VALUES(?)";
        $insert = $this->conexion_bd->prepare($query);
        $data = array($rom);
        $insert->execute($data);
    }

    function query_rom_mem()
    {
        $query_rom_mem_2 = "SELECT * FROM tb_rom_memory";
        $query_rom_mem_3 = $this->conexion_bd->prepare($query_rom_mem_2);
        $result = $query_rom_mem_3->fetchall(PDO::FETCH_ASSOC);
        return $result;
    }

    function update_rom_mem($id_rom_mem, $nombre_rom_mem)
    {
        $this->ram = $nombre_rom_mem;

        $query_update_rom_mem = "UPDATE tb_rom_memory SET rom_capacity ? WHERE id_rom_memory = $id_rom_mem";
        $query_update_rom_mem_2 = $this->$conexion_bd->prepare($query_update_rom_mem);
        $array_query_rom_mem = array($this->rom);
        $result = $query_update_rom_mem_2->execute($array_query_rom_mem);
        return $result;
    }
}
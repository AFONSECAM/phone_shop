<?php
    include_once ("C:/xampp/htdocs/phone_store/includes/class_conection.php");

    class Battery extends Conection{
        public $capacidad;
        public $conexion_bd;

        function __construct()
        {            
            $this->conexion_bd = new Conection();
            $this->conexion_bd = $this->conexion_bd->connect();            
        }

        function createBatery($cap){    
            $query = "INSERT INTO tb_battery (capacity) VALUES(?)";
            $insert = $this->conexion_bd->prepare($query);
            $data = array($cap);        
            $insert->execute($data);                       
        }

        function query_batery(){
            $query_batery_2= "SELECT * FROM tb_battery";
            $query_batery_3=$this->conexion_bd->prepare($query_batery_2);
            $result =$query_batery_3 ->fetchall(PDO::FETCH_ASSOC);
            return $result;
        }

        function update_battery($id_battery, $capacidad){
            $this->cap = $capacidad;
        
        $query_update_battery = "UPDATE tb_battery SET capacidad ? WHERE id_battery = $id_baterry";
        $query_update_battery_2 = $this->$conexion_bd->prepare($query_update_battery);
        $array_query_battery = array ($this->cap);
        $result=$query_update_battery_2->execute($array_query_battery);
        return $result;
        
        }
    }
?>
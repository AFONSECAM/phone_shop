<?php
    include_once ("class_conection.php");

    class Screen extends Conection{
        public $pantalla;
        public $conexion_bd;

        function __construct()
        {            
            $this->conexion_bd = new Conection();
            $this->conexion_bd = $this->conexion_bd->connect();            
        }

        function create_screen($pan){    
            $query = "INSERT INTO tb_screen_size (inches) VALUES(?)";
            $insert = $this->conexion_bd->prepare($query);
            $data = array($pan);        
            $insert->execute($data);                       
        }

        function query_screen(){
            $query_screen_2= "SELECT * FROM tb_screen_size";
            $query_screen_3=$this->conexion_bd->prepare($query_screen_2);
            $result =$query_screen_3 ->fetchall(PDO::FETCH_ASSOC);
            return $result;
        }

        function update_screen($id_screen_size, $tamano){
            
            $this->tam = $tamano;
        
        $query_update_screen = "UPDATE tb_screen_size SET inches ? WHERE id_screen_size = $id_screen_size";
        $query_update_screen_2 = $this->$conexion_bd->prepare($query_update_screen);
        $array_query_screen = array ($this->tam);
        $result=$query_update_screen_2->execute($array_query_screen);
        return $result;
        
        }
    }
?>
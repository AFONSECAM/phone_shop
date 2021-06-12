<?php

    class Conection{
        /* Atributos para la conexión a la BD */
        private $host = "localhost";
        private $user = "root";
        private $pass = "";
        private $bd = "shop_phones";
        private $utf = "utf8mb4";
        private $response;

        function __construct(){
            $pdo_connect = "mysql:hos=".$this->host.";dbname=".$this->bd.";charset=".$this->utf;
            try {
                $this->response = new PDO($pdo_connect, $this->user, $this->pass);                
            } catch (Exception $e) {
                $this->response = "Error al conectar con la BD ";
                echo "Error: " . $e->getMessage();
            }
        }

        function connect(){
            return $this->response;
        }
    }
    
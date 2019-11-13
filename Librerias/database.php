<?php

    class Database{

        private $servidor;
        private $bd;
        private $user;
        private $pass;
        private $charset;

        public function __construct (){
            $this->servidor = constant ('SERVIDOR');
            $this->bd = constant ('BD');
            $this->user = constant ('USER');
            $this->pass = constant ('PASS');
          //  $this->charset = constant ('CHARSET');
        }

        function connect(){
            try{
                
                $connection = "mysql:host=".$this->servidor.";dbname=".$this->bd;
                $options =[  
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES =>false,
                ];
                $pdo = new PDO ($connection, $this->user, $this->pass, $options);  
                return $pdo;     
            }catch(PDOException $e){
                
                print_r('Error en conexion: '. $e->getMessage());
            }
        }

    }

?>
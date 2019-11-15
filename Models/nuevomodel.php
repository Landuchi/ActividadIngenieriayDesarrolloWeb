<?php

    class NuevoModel extends Model{

        public function __construct (){
            parent::__construct();
        }
        public function  insertar($datos){
            //insertar en la base de datos
            try{
            $query=$this->bd->connect()->prepare('INSERT INTO erroresweb (origen,codigo,descripcion,fecha) VALUES (:origen, :codigo, :descripcion, :fecha)');
            $query->bindParam(':origen', $datos['origen']);
            $query->bindParam(':codigo', $datos['codigo']);
            $query->bindParam(':descripcion', $datos['descripcion']);
            $query->bindParam(':fecha', $datos['fecha']);
            $query->execute();
            return true;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }
    }
?>

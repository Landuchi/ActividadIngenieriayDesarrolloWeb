<?php
    include_once 'Models/errorweb.php';
    class ConsultaModel extends Model{

        public function __construct (){
            parent::__construct();
        }

        public function  consultar(){
            //insertar en la base de datos
            $items=[];

            try{

            $query=$this->bd->connect()->query("SELECT * FROM erroresweb");

            while($row=$query->fetch()){
                $item = new errorweb();
                $item -> iderror = $row ['iderror'];
                $item -> origen = $row ['origen'];
                $item -> codigo = $row ['codigo'];
                $item -> descripcion = $row ['descripcion'];
                $item -> fecha = $row ['fecha'];

                array_push($items,$item);
            }
            return $items;
            }catch(PDOException $e){
                return [];
            }

        }

        public function getById ($id){
            $item = new errorweb();

            $query = $this->bd->connect()->prepare("SELECT * FROM erroresweb WHERE iderror = :iderror");
            try{
                $query->execute(['iderror'=>$id]);
                while($row = $query->fetch()){
                    $item -> iderror = $row ['iderror'];
                    $item -> origen = $row ['origen'];
                    $item -> codigo = $row ['codigo'];
                    $item -> descripcion = $row ['descripcion'];
                    $item -> fecha = $row ['fecha'];

                }
                return $item;
            }catch(PDOException $e){
                return null;
            }
        }

        public function update($item){
            $query=$this->bd->connect()->prepare("UPDATE erroresweb SET origen = :origen, codigo= :codigo, descripcion = :descripcion, fecha= :fecha WHERE iderror=:iderror");

            try{
                $query->execute([
                    'iderror' => $item ['iderror'],
                    'origen' => $item ['origen'],
                    'codigo' => $item ['codigo'],
                    'descripcion' => $item ['descripcion'],
                    'fecha' => $item ['fecha'],
                ]);

                return true;
                }catch(PDOException $e){
                    echo $e->getMessage();
                    return false;
                }  
        }

        public function delete($id){

            $query=$this->bd->connect()->prepare("DELETE FROM erroresweb WHERE iderror=:id");

            try{

                $query->execute([
                    'id' => $id,
                ]);

                return true;
                }catch(PDOException $e){
                    echo $e->getMessage();
                    return false;
                }


        }

    }

?>

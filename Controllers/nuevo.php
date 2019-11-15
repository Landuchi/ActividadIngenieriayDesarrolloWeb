<?php
    //CONTROLADOR PRINCIPAL
    class Nuevo extends Controller{
        function __construct(){
            parent::__construct();
            $this->view->mensaje="";
        }
        function render(){
            $this->view->render('nuevo/index');
        }
        function  registrarError(){
            $origen      = $_POST ['origen'];
            $codigo      = $_POST ['codigo'];
            $descripcion = $_POST ['descripcion'];
            $fecha       = $_POST ['fecha'];
            //pasamos todos los datos en forma de arreglo
            $mensajeInsertar="";
            if($this->model->insertar(['origen' => $origen, 'codigo' => $codigo, 'descripcion' => $descripcion,'fecha' => $fecha])){
                $mensajeInsertar= "Nuevo Error Registrado";
            }else{
                $mensajeInsertar= "Error";
            }
            $this->view->mensaje=$mensajeInsertar;
            $this->render();
        }
    }

 ?>

<?php
//CONTROLADOR DE ERRORES
class Errores extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->mensajeError="Error al cargar la página";
        $this->view->render('errores/index');
       
    }
    
}

?>
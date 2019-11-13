<?php
//CONTROLADOR DE USUARIOS
class account extends Controller{
    function __construct(){
        parent::__construct();
        
    }

    function render(){
        $this->view->render('account/index');
    }

}

?>
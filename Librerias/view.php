<?php
class View{
    function __construct(){
        
    }

    function render ($nombreVista){
        require 'views/'.$nombreVista.'.php';
    }

}

?>
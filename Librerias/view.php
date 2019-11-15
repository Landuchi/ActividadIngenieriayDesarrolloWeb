<?php
class View{
    function __construct(){

    }

    function render ($nombreVista){
        require 'Views/'.$nombreVista.'.php';
    }

}

?>

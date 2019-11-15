<?php
class View{
    function __construct(){

    }

    function render ($nombreVista){
        require __DIR__.'/../Views/'.$nombreVista.'.php';
    }

}

?>

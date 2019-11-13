<?php

require_once 'Controllers/errores.php';
class App{

    function __construct(){

        $url = isset($_GET['url']) ? $_GET['url']:null;
        $url = rtrim($url, '/');
        $url = explode('/',$url);
        //cuando se ingresa sin definir controlador y te dirige al home
        if(empty($url[0])){
            $archivoControlador= 'Controllers/home.php';
            require_once $archivoControlador;
            $controlador = new Home();
            $controlador->loadModel('home');
            $controlador->render();
            return false;
        }

        $archivoControlador= 'Controllers/'.$url[0].'.php';
        //se valida si el controlador exista, en caso de que sea falso se envia un error
        if(file_exists($archivoControlador)){  
        require_once $archivoControlador;

        //se inicializa el controlador y se carga el modelo
            $controlador = new $url[0];
           $controlador->loadModel($url[0]);
            //numero de elementos del arreglo de la url
            $nparam=sizeof($url);

            if($nparam>1){
                if($nparam>2){
                    $param=[];
                    for($i=2; $i<$nparam; $i++){
                        array_push($param,$url[$i]);
                    }
                    $controlador->{$url[1]}($param);
                }else{
                    $controlador->{$url[1]}();
                }
            }
            else{
                $controlador->render();
            }
          
        }
        
        else{
            $controlador = new Errores();
        }
    }

}

?>
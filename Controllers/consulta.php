<?php
    //CONTROLADOR PRINCIPAL
    class Consulta extends Controller{

        function __construct(){
            parent::__construct();
            $this->view->erroresweb = [];
        }

        function render(){
            $erroresweb =  $this->model->consultar();
            $this->view->erroresweb= $erroresweb;
            $this->view->render('consulta/index');
        }

        function verErrorweb($param =null){
            $idError = $param[0];
            $errorweb = $this->model->getById($idError);
            //se guarda en una variable de sesion para que el usuario no pueda modificar el id del error
            session_start();
            $_SESSION['id_verErrorweb']= $errorweb->iderror;
            $this->view->errorweb=$errorweb;
            $this->view->mensaje = "";
            $this->view->render('consulta/detalle');


        }

        function editarErrorweb(){
            session_start();
            $iderror= $_SESSION['id_verErrorweb'];
            $origen      = $_POST ['origen'];
            $codigo      = $_POST ['codigo'];
            $descripcion = $_POST ['descripcion'];
            $fecha       = $_POST ['fecha'];

            unset($_SESSION['id_verErrorweb']);
            echo print_r($iderror);
            if($this->model->update(['iderror'=>$iderror, 'origen' => $origen, 'codigo' => $codigo, 'descripcion' => $descripcion,'fecha' => $fecha])){
               $errorweb = new errorweb();
               $errorweb->iderror = $iderror;
               $errorweb->origen = $origen;
               $errorweb->codigo = $codigo;
               $errorweb->descripcion = $descripcion;
               $errorweb->fecha = $fecha;

               $this->view->errorweb = $errorweb;
               $this->view->mensaje = "Los cambios se han guardado correctamente".$errorweb;

            }else{
               $this->view->mensaje = "Error en guardar cambios";
            }
            $this->view->render('consulta/detalle');
        }

        function eliminarErrorweb($param = null){
            $iderror = $param[0];

            if($this->model->delete($iderror)){
               $this->view->mensaje = "El error ha sido eliminado exitosamente";

            }else{
               $this->view->mensaje = "Error en guardar cambios";
            }
            $this->view->render('consulta/detalle');
        }
    }

 ?>

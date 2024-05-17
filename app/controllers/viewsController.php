<?php
    namespace app\Controllers;
    use app\models\viewsModel;

    class viewsController extends viewsModel {
        
        public function obtenerVistasController($view){
            if($view!=""){
                $respuesta = $this->obtenerVistasModel($view);
            }else{
                $respuesta = "login";
            }
            return $respuesta;
        }
    }
?>
<?php
    namespace app\models;

    class viewsModel {
        protected function obtenerVistasModel($view){
            $listaBlanca = ["dashboard"];

            if(in_array($view, $listaBlanca)){
                if(is_file("./app/views/contents/".$view."-view.php")){
                    $contenido = "./views/contents/".$view."-view.php";
                }else{
                    $contenido = "404";
                }  
            }elseif($view == "login" || $view == "index"){
                $contenido = "login";   
            }else{
                $contenido = "404";
            }
            return $contenido;
        }
    }
?>
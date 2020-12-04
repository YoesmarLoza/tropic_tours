<?php 
    class PaginasModel{
        public function mostrarPaginaM($nombre){
            if($nombre=="home"||$nombre=="about"||$nombre=="contact-us"||$nombre=="blog"){
                $page="views/modules/".$nombre.".php";
            }
            else{
                $page="views/modules/home.php";
            }
            return $page;
        }
    }
?>
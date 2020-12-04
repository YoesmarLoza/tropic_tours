<?php

class PaginaControllerC{
    public function mostrarTemplate(){
        include "views/template.php";
    }
    public function mostrarPaginas(){
        if(isset($_GET['action'])){
            $nombre=$_GET['action'];
        }
        else{
            $nombre="index";
        }
        $page=PaginasModel::mostrarPaginaM($nombre);
        include $page;
        //echo $page;
    }
}
?>
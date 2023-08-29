<?php

class ModeloController{
    private $model;
    public function __construct(){
        $this->model=new Modelo();
    }

    //Iniciar en la pagina principal
    static function login(){
    require_once("view/login.php");
    }
}        

?>

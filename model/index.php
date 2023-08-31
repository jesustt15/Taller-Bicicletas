<?php

class Modelo{
    private $Modelo;
    private $db;
    private $datos;
    public function __construct(){
        $this->Modelo=array();
        $this->db=new PDO('mysql:host=localhost;dbname=taller_bicis',"root","");
    }

    //Validar si el usuario existe en la bd para el login
    public function validar_User_existente($tabla, $condicion,$condicion2){
        $consul="select * from ".$tabla." where ".$condicion." OR ".$condicion2.";";
        $resul=$this->db->query($consul);
        if($resul){
            return $resul->fetchAll(PDO::FETCH_ASSOC);
        }else{
            return false;
        }
    }

}    
?>
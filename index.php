<?php

require_once("config.php");
require_once("controller/index.php");
if(isset($_GET['n'])){
    if(method_exists("ModeloController",$_GET['n'])){
        ModeloController::{$_GET['n']}();
    }
}
else{
    ModeloController::login();
    }
?>
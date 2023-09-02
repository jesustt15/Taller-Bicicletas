<?php
 require_once 'model/user_m.php';

class UserController{
    private $model;

    public function __CONSTRUCT(){
        $this->model = new User();
    }
    public function Login(){
        require_once 'view/login.php';
       }

   /* public function Guardar(){
        $user = new User();
        
        $user->username = $_REQUEST['pNombre'];
        $user->contrasena = $_REQUEST['Cedula'];
        $user->Empleado_idEmpleado = $_REQUEST['id'];

        require_once 'view/header.php';
        require_once 'view/home_gere.php';
    }
    public function Cerrar(){
        require_once 'index.php';
    } */
    public function Entrar(){
        $user = new User();
        
        $user->username = $_REQUEST['username'];
        $user->password = $_REQUEST['password'];
      
        $resp = $user->verificar($user->username, $user->password);

        // selected para direccionar interfaz por rol
   
        if($resp){
            
            //home para los casos de gerente
            require_once 'view/home.php';
        }
 
        
    }
}

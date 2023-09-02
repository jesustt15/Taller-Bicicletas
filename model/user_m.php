<?php
//Clase Modelo de Usuario
class User {

    //Atributos del Usuario
    private $pdo; // conexion a la bd

    public $username;
    public $password;

    public function __CONSTRUCT(){
        try {
            $this->pdo = Database::StartUp()     //Probamos que se conecte la bd con  try y catch
        
        
    }}

    public function verificar($username, $password){
			
		$sql="SELECT * FROM user WHERE username='$username' AND password='$password'";
		$query = $this->pdo->query($sql);
		
		if($query){
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}else{	
		 return false;
		}
	}
}


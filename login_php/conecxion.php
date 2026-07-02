<?php 
// vamos a definir la conexion 
class conexion {
    //declaramos las variaboles de la conexion 
    private $servername = "localhost";
    private $username = "root"; 
    private $password = "";
    private $dbname = "citas";
    private $conn; 
    
    public fuction _construct(){

    //creamos la conexion de slq 
    $this->conn = new mysql($this->servername, $this->username, $this->password, $this->dbname);

    //vamos a crear el codigo para verificar un error.

    if($this->conn->connect_error){
    
    die ("conexion fallida: ". $his->conn->connect_error);
    } 

    }
 
    public function getconexion(){
    return $this->conn; 
}

} 


?>
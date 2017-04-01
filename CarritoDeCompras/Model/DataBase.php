<?php 

class DataBase{
	public $database;
	public $user;
	public $password;
	public $host;
	public $driver;
	public $con;
	public function __construct(){
		$database_config=require '../config/database.php';
        $this->driver=$database_config["driver"];
        $this->host=$database_config["host"];
        $this->user=$database_config["user"];
        $this->pass=$database_config["pass"];
        $this->database=$database_config["database"];
        return $this->conexion();
	}


    public function conexion(){
    
	    if($this->driver=="mysql" || $this->driver==null){
	        $con=new mysqli($this->host, $this->user, $this->pass, $this->database);
	    }
    
 	    $this->con=$con;
    }
}
?>
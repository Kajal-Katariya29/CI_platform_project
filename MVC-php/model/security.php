<?php
class Security{
    private $table = "user";
    private $Connection;
    // private $id;
    public function __construct($Connection) {
		$this->Connection = $Connection;
    }

public function validate($name,$password){
    $sql = "SELECT * FROM  user where username = '" . $name ."' and password = " . $password;  
    $resultados = $this->Connection->query($sql);
    return $resultados;
}
}

?>
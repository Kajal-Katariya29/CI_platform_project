<?php
class MysqliConnector{
    private $driver;
    private $host, $user, $pass, $database, $charset;
    public function __construct() {
        $db_cfg = require_once 'config/database.php';
        $this->driver=DB_DRIVER;
        $this->host=DB_HOST;
        $this->user=DB_USER;
        $this->pass=DB_PASS;
        $this->database=DB_DATABASE;
        $this->charset=DB_CHARSET;
    }
    public function Connection(){
        
        $conn = mysqli_connect($this->host, $this->user, $this->pass,$this->database);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
          else{
          //echo "Connected successfully";
          }

          return $conn;
    }
}
?>
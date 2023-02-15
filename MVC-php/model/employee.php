<?php
class Employee {
    private $table = "employees";
    private $Connection;
    private $id;
    private $Name;
    private $Surname;
    private $email;
    private $phone;
    public function __construct($Connection) {
		$this->Connection = $Connection;
    }
    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }
    public function getName() {
        return $this->Name;
    }
    public function setName($Name) {
        $this->Name = $Name;
    }
    public function getSurname() {
        return $this->Surname;
    }
    public function setSurname($Surname) {
        $this->Surname = $Surname;
    }
    public function getEmail() {
        return $this->email;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function getphone() {
        return $this->phone;
    }
    public function setphone($phone) {
        $this->phone = $phone;
    }
    public function save(){
        
        $sql = "INSERT INTO " . $this->table . " (Name,Surname,email,phone)
        VALUES ("."'".$this->Name."','".$this->Surname."','".$this->email."' ,'".$this->phone."')";
        $result = $this->Connection->query($sql);
        return $result;
    }
    public function update(){
        $sql = " UPDATE " . $this->table . "  SET Name = :Name, Surname = :Surname, email = :email, phone = :phone WHERE id = :id";

        $result = $this->Connection->query($sql);
        $this->Connection->close();
        return $result;
    }
    public function getAll(){
        $sql = "SELECT id,Name,Surname,email,phone FROM " . $this->table;  
        //echo $sql;
       $resultados = $this->Connection->query($sql);
       $this->Connection = null;
       return $resultados;
    }
    public function getById($id){
        $sql = "SELECT id,Name,Surname,email,phone FROM " . $this->table;
        $resultados = $this->Connection->query($sql);
        return $resultados->fetch_assoc();
    }
    public function getBy($column,$value){
        $consultation = $this->Connection->prepare("SELECT id,Name,Surname,email,phone
                                                FROM " . $this->table . " WHERE :column = :value");
        $consultation->execute(array(
            "column" => $column,
            "value" => $value,
        ));
        $resultados = $consultation->fetchAll();
        $this->Connection = null; //connection closure
        return $resultados;
    }
    public function deleteById($id){
        try {
            $consultation = $this->Connection->prepare("DELETE FROM " . $this->table . " WHERE id = :id");
            $consultation->execute(array(
                "id" => $id
            ));
            $Connection = null;
        } catch (Exception $e) {
            echo 'Failed DELETE (deleteById): ' . $e->getMessage();
            return -1;
        }
    }
    public function deleteBy($column,$value){
        try {
            $consultation = $this->Connection->prepare("DELETE FROM " . $this->table . " WHERE :column = :value");
            $consultation->execute(array(
                "column" => $value,
                "value" => $value,
            ));
            $Connection = null;
        } catch (Exception $e) {
            echo 'Failed DELETE (deleteBy): ' . $e->getMessage();
            return -1;
        }
    }
}
?>
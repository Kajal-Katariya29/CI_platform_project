<?php
class EmployeesController{
    private $mysqliConnector;
    private $mysqliConnection;
    private $conectar;
    private $Connection;
    //private  $checked=false;
    public function __construct() {
		require_once  __DIR__ . "/../core/MysqliConnector.php";
        require_once  __DIR__ . "/../model/employee.php";
        require_once  __DIR__ . "/../model/security.php";
        
        $this->mysqliConnector = new MysqliConnector();
        $this->mysqliConnection = $this->mysqliConnector->Connection();
    }
   /**
    * Ejecuta la acción correspondiente.
    *
    */
    public function run($accion){
        switch($accion)
        {
            case "check" :
                $this->check();
                break;
            case "login" :
                if(isset($_SESSION['name'])){
                    $this->index();
                }
                else{
                    $this->login();  
                }
                break;
            case "index" : 
                if(isset($_SESSION['name'])){
                    $this->index();
                }
                else{
                    $this->login();  
                }
                break;
            case "alta" :
                $this->crear();
                break;
            case "detalle" :
                $this->detalle();
                break;
            case "actualizar" :
                $this->actualizar();
                break;
            case "logOut" :
                $this->logOut();
                break;
            default:
                $this->login();
                break;
            }
    }

    public function check(){

        
        if(!empty($_GET['name']) && !empty($_GET['password'])){

         
            
           // $sql = "SELECT * FROM  user where username = '".$_GET['name']."' and password = '".$_GET['password']."'";  
            //echo $sql;
            //$resultados = $this->mysqliConnection->query($sql);
            //echo $resultados;

            $security=new Security($this->mysqliConnection);
            $resultados=$security->validate($_GET['name'],$_GET['password']);

            // echo $resultados->num_rows;
            // exit;
            if($resultados->num_rows > 0){
                $res = $resultados->fetch_object();
                //print_R($res);exit();
                $_SESSION['name'] = $res->username;
                //echo $_SESSION['name'];die();
                header('Location: index.php?action=index');

            }else{
                header('Location: index.php?error=please enter valid data');
            }
            //print_R($resultados);
        }else{
            header('Location: index.php?error=please enter data');
        }
        // if($_REQUEST=='POST')
        // echo $_POST['name'];


    }
   /**
    * Loads the employees home page with the list of
    * employees getting from the model.
    *
    */
    public function index(){
        //We create the employee object
        $employee=new Employee($this->mysqliConnection);
        //We get all the employees
        $employees=$employee->getAll();
        //We load the index view and pass values to it
        $this->view("index",array(
            "employees"=>$employees,
            "titulo" => "PHP MVC"
        ));
    }
    public function login(){
        
        $this->view("login",array());
    }

    public function logOut(){
        unset($_SESSION['name']);
        session_destroy();
        header('Location: index.php');
        
        //header('Location: index.php');
    }

    
    /**
    * Loads the employees home page with the list of
     * employees getting from the model.
    *
    */
    public function detalle(){
        //We load the model
        $modelo = new Employee($this->mysqliConnection);
        //We recover the employee from the BBDD
        $employee = $modelo->getById($_GET["id"]);
        //We load the detail view and pass values to it
        $this->view("detalle",array(
            "employee"=>$employee,
            "titulo" => "Detalle Employee"
        ));
    }
   /**
    * Create a new employee from the POST parameters
     * and reload the index.php.
    *
    */
    public function crear(){
        if(isset($_GET["Name"])){
            $employee=new Employee($this->mysqliConnection);
            $employee->setName($_GET["Name"]);
            $employee->setSurname($_GET["Surname"]);
            $employee->setEmail($_GET["email"]);
            $employee->setphone($_GET["phone"]);
            $save=$employee->save();
        }
        header('Location: index.php?action=index');
    }
   
   /**
    * Update employee from POST parameters
     * and reload the index.php.
    *
    */
    public function actualizar(){
        if(isset($_GET["id"])){
            //We create a user
            $employee=new Employee($this->mysqliConnection);
            $employee->setId($_GET["id"]);
            $employee->setName($_GET["Name"]);
            $employee->setSurname($_GET["Surname"]);
            $employee->setEmail($_GET["email"]);
            $employee->setphone($_GET["phone"]);
            $save=$employee->update();
        }
        header('Location: index.php?action=index');
    }
   /**
    * Create the view that we pass to it with the indicated data.
    *
    */
    public function view($vista,$datos){
        $data = $datos;
        require_once  __DIR__ . "/../view/" . $vista . "View.php";
    }
}
?>
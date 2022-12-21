<?php

new DeptController();

new Connection();

class DeptController{

    private $list;

    public function __construct(){
            
         if(!empty($_REQUEST["act"])){

            switch($_REQUEST["act"]){

                case "list":
                    $this->list();
                    break;
                // case "add":
                //     $this->add();
                //     break;
                // case "insert":
                //     $this->insert();
                //     break;
                // case "delete":
                //     $this->delete();
                //     break;
                // case "mod":
                //     $this->mod();
                //     break;                      
                // case "update":
                //     $this->update();
                //     break;  
                default:
                $this->index();                      
                
            }

            exit;

        }else{
                $this->index();
        }
    }

    public function index(){

        require_once("../common/Connection.php");
        $conn = new Connection();
        $conn->connect();

        require_once("Dept.php");
        $dept = new Dept($conn);
        $this->list = $dept->getDept();

        echo("預設方法");
    }

    public function list(){
        echo("list方法");
    }
}

<?php
class employee extends Controller{

    public function __construct(){
        parent::__construct();
    }
    public function index(){   
        //if($_SESSION['title'] == "Admin" ){ 
        $data = [];
        $result = $this->model->getData();
        $data['result'] = $result;

        $this->view->render("admin/employeeDetails", $data);
    }

    public function register(){   
        //if($_SESSION['title'] == "Admin" ){ 

        $this->view->render("admin/registerEmployee");
    }

    public function attendence(){   
        //if($_SESSION['title'] == "Admin" ){
        $data = [];
        $result = $this->model->getAttendence();
        $data['result'] = $result;

        $this->view->render("admin/employeeAttendence", $data);
    }

    public function salary(){   
        //if($_SESSION['title'] == "Admin" ){
        $data = [];
        $result = $this->model->getSalary();
        $data['result'] = $result;

        $this->view->render("admin/employeeSalary", $data);
    }

}

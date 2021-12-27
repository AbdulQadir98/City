<?php

class employeeModel extends Model{

    function __construct(){
        parent::__construct();
    }
    
    function getData(){
        $query = "SELECT * from employee inner join user on employee.user_id=user.user_id ORDER BY emp_id";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }  
    
    function getAttendence(){
        $query = "SELECT * from employee inner join user on employee.user_id=user.user_id ORDER BY emp_id";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    } 
    
    function getSalary(){
        $query = "SELECT * from employee inner join user on employee.user_id=user.user_id ORDER BY emp_id";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

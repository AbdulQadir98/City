<?php

class Homepage extends Controller {

    function __construct(){
        parent::__construct();
        //call model if need
    }

    function index(){
        $this->view->render("homepage");
    }
}
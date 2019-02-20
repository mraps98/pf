<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model("Department_Model");
    }

    public function index(){
        $data['departments'] = $this->Department_Model->getDepartments();
        $this->load->view('department/index.php',$data);
    }
}
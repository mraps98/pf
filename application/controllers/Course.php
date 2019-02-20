<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model("Course_Model");
    }

    public function index(){
        $data['courses'] = $this->Course_Model->getCourses();
        $this->load->view('course/index.php',$data);
    }
}
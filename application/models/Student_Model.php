<?php
class Student_Model extends CI_model{

    public function __construct(){
        $this->load->database();
    }

    public function getStudents(){
        $query = $this->db->get("student");
        return $query->result_array();
    }

}

?>
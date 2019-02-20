<?php
class Teacher_Model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function getTeachers(){
        $query = $this->db->query('select t.fname, t.midinit, t.lname, t.dob, t.nationality, t.date_joined, d.name from teacher t, department d where t.department_id=d.id;');
        return $query->result_array();
    }
}


?>
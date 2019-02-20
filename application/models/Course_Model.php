<?php
class Course_Model extends CI_model{

    public function __construct(){
        $this->load->database();
    }

    public function getCourses(){
        $query = $this->db->query("select c.code, c.name, d.name as department, t.fname, t.midinit, t.lname
        from course c, department d, teacher t
        where c.department_id = d.id and c.teacher_id = t.id;");
        return $query->result_array();
    }

}

?>
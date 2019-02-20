<?php
class Department_Model extends CI_model{

    public function __construct(){
        $this->load->database();
    }

    public function getDepartments(){
        $query = $this->db->query("select d.name, t.fname, t.midinit, t.lname from department d, teacher t where d.head_id = t.id;");
        return $query->result_array();
    }

}

?>
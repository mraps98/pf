<?php
class Student_Model extends CI_model{

    public function __construct(){
        $this->load->database();
    }

    public function getStudents(){
        $query = $this->db->query("select s.fname,s.midinit,s.lname,s.dob,s.nationality,s.date_enrolled,d.name as major,t.fname as tfname,t.midinit as tmidinit,t.lname as tlname from student s,department d, teacher t where s.major_id = d.id and s.supervisor_id = t.id;");
        return $query->result_array();
    }

}

?>
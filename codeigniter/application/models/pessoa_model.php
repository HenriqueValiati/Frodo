<?php

class pessoa_model extends CI_Model {
    
        public function __construct() {

        parent::__construct();
        
        $this->load->library('session');
        //load database libray manually
        $this->load->database();
    }

public function get_pessoas(){
		$this->db->select("*");
		$this->db->from("cadastro");

		$query = $this->db->get();
        return $query->result();
    }
   
}

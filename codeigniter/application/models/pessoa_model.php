<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class pessoa_model extends CI_Model {

public function get_pessoas(){
		$this->db->select("*");
		$this->db->from("cadastro");

		$query = $this->db->get();
        return $query->result();
    }
   
}

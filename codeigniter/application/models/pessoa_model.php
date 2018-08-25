<?php

class pessoa_model extends CI_Model {

    public function __construct() {

        parent::__construct();

        $this->load->library('session');
        //load database libray manually
        $this->load->database();
    }

    public function get_pessoa() {
        $sql = "SELECT id, nome, documento, fone, email FROM cadastro";
        $this->db->query($sql)->result();
    }

    public function edita_pessoa($id) {
        $sql = "SELECT * FROM cadastro WHERE id = $id";
        echo json_encode($this->db->query($sql)->result());
        exit();
    }

    public function deleta_pessoa($id) {
return $this->db->insert("cadastro", $id);
        exit();
    }

    public function set_pessoa($dados) {
        return $this->db->insert("cadastro", $dados);
    }

}

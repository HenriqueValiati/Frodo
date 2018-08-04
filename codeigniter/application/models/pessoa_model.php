<?php

class pessoa_model extends CI_Model {

    public function __construct() {

        parent::__construct();

        $this->load->library('session');
        //load database libray manually
        $this->load->database();
    }

    public function get_pessoa() {

        //obter dados
        $sql = "SELECT nome, documento, fone, email FROM cadastro";
        return $this->db->query($sql)->result();
    }

    public function set_pessoa($dados) {

        
        $sql = "INSERT INTO cadastro (nome, documento, endereco, numero, pais, uf, cidade, fone, email, dt_nasc) "
                . "VALUES ( '$nome', '$documento', '$endereco', '$numero', '$pais', '$uf', '$cidade', '$fone', '$email', '$dt_nasc')";
        
      return $this->db->query($sql)->result();
       
      
    }

    public function delete_pessoas() {

        $server = "localhost";
        $user = "root";
        $pass = "";
        $db = "Aula";

        //abrir conexão
        $connect = new mysqli($server, $user, $pass, $db);
        //testar conexão
        if ($connect->connect_error) {
            die("A conexão com o Banco de Dados falho. Erro: " . $conn->connect_error);
        }

        //deletar dados
        $sql = "DELETE FROM cadastro WHERE id=";

        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    }

}

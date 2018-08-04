<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoa extends CI_Controller {

    public function __construct() {
        //parent::__construct( ); 
        //$this->load->library('session');
        //call CodeIgniter's default Constructor
        parent::__construct();
        $this->load->library('session');
        //load Model
        $this->load->model('pessoa_model');
        //this->pessoa_model->set_pessoa($dados);
    }

    public function index() {
        $data['listaPessoa'] = $this->pessoa_model->get_pessoas();
        $data['pagina'] = 'pessoa';
        $this->load->view('principal', $data);
    }
    public function get_pessoa(){
        $this->pessoa_model->get_pessoa();
    }

    public function recebe_dados() {

        $nome = $this->input->post("nome");
        $documento = $this->input->post("documento");
        $email = $this->input->post("email");
        $fone = $this->input->post("fone");
        $nascimento = $this->input->post("nascimento");
        $endereco = $this->input->post("endereco");
        $numero = $this->input->post("numero");
        $cidade = $this->input->post("cidade");
        $uf = $this->input->post("uf");
        $pais = $this->input->post("pais");

        $dados = array(
            "nome" => $nome,
            "nome" => $nome,
            "nome" => $nome,
            "nome" => $nome,
            "nome" => $nome,
            "nome" => $nome,
            "nome" => $nome
        );

        $resultado = $this->pessoa_model->set_pessoa($dados);
        
        
    }

}

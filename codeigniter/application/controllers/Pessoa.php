<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoa extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        //load Model
        $this->load->model('pessoa_model', 'pessoaModel');
    }

    public function index() {
        $data['listaPessoa'] = $this->pessoaModel->get_pessoa();
        $data['pagina'] = 'pessoa';
        $this->load->view('principal', $data);
    }

    public function get_pessoa() {
        $this->pessoaModel->get_pessoa();
    }

    public function edita_pessoa($id = 0) {//$id = 0 se não tiver id pega 0 default
        $this->pessoaModel->edita_pessoa($id);
    }

    public function deleta_pessoa($id = 0) {//$id = 0 se não tiver id pega 0 default
        $this->pessoaModel->deleta_pessoa($id);
    }

    public function recebe_dados() {

        $nome = $this->input->post("nome", true);
        $documento = $this->input->post("documento", true);
        $email = $this->input->post("email", true);
        $fone = $this->input->post("fone", true);
        $nascimento = $this->input->post("nascimento", true);
        $endereco = $this->input->post("endereco", true);
        $numero = $this->input->post("numero", true);
        $cidade = $this->input->post("cidade", true);
        $uf = $this->input->post("uf", true);
        $pais = $this->input->post("pais", true);

        $dados = array(
            "nome" => $nome,
            "documento" => $documento,
            "endereco" => $endereco,
            "numero" => $numero,
            "pais" => $pais,
            "uf" => $uf,
            "cidade" => $cidade,
            "fone" => $fone,
            "email" => $email,
            "nascimento" => $nascimento
        );

        //$resultado = 
        $this->pessoaModel->set_pessoa($dados);
    }

}

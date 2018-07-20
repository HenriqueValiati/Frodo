<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoa extends CI_Controller {

    public function __construct() {
        //parent::__construct( ); 
        //$this->load->library('session');
        //call CodeIgniter's default Constructor
        parent::__construct();
        $this->load->library('session');
        //load database libray manually
        $this->load->database();
        //load Model
        $this->load->model('pessoa_model');
    }

    public function index() {
        $data['listaPessoa'] = $this->pessoa_model->get_pessoas();
        $data['pagina'] = 'pessoa';
        $this->load->view('principal', $data);
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

        echo "Nome: " . $nome . "<br>" .
        "Documento: " . $documento . "<br>" .
        "E-mail: " . $email . "<br>" .
        "Fone: " . $fone . "<br>" .
        "Data de Nascimento: " . $nascimento . "<br>" .
        "Endereço: " . $endereco . "<br>" .
        "Número: " . $numero . "<br>" .
        "Cidade: " . $cidade . "<br>" .
        "UF: " . $uf . "<br>" .
        "País: " . $pais . "<br>";

        $conexao = mysqli_connect('localhost', 'root', '', 'aula') or die('Erro ao conectar ao banco de dados');
        $sql = "INSERT INTO cadastro VALUES ";
        $sql .= "('', '$nome', '$documento', '$endereco', '$numero', '$cidade', '$uf', '$pais', '$fone', '$email', '$nascimento')";
        mysqli_query($conexao, $sql) or die("Erro ao tentar cadastrar registro");
        mysqli_close($conexao);
        echo "Cadastrado com sucesso!";
        echo $sql;
        //header('Location: http://localhost/codeigniter/pessoa');
    }

}

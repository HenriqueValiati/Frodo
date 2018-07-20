<?php
    $this->load->view('home');
?>
<title>Cadastro de Pessoas</title>

    <div class="col-sm-9 col-sm-offset-3 col-md-12 col-md-offset-2 main">
        <form method="post" action="<?php echo base_url() . 'Pessoa/recebe_dados' ?>">
            <br>
            <h2 style="text-align: center">Cadastro</h2>
            <br>
            <div class="row form-group">
                <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12">
                    <label for="nome">Nome Completo</label>
                    <input class="form-control" type="text" placeholder="Nome Completo" name="nome" id="nome" required>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12">
                    <label>CPF/Passaporte</label>
                    <br>
                    <input type="text" placeholder="CPF/Passaporte" name="documento" id="documento" required>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12">
                    <label>E-mail</label>
                    <br>
                    <input type="text" placeholder="E-mail" name="email" id="email" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12">
                    <label>Telefone</label>
                    <br>
                    <input type="text" placeholder="Telefone" name="fone" id="fone" required>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12">
                    <label>Data de Nascimento</label>
                    <br>
                    <input type="date" name="nascimento" id="nascimento" required>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12">
                    <label>País</label>
                    <br>
                    <input type="text" placeholder="País" name="pais" id="pais" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12"> 
                    <label>Endereço</label>
                    <br>
                    <input type="text" placeholder="Endereço" name="endereco" id="endereco" required>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12">
                    <label>Número</label>
                    <br>
                    <input type="number" placeholder="Número" name="numero" id="numero">
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12">
                    <label>Cidade</label>
                    <br>
                    <input type="text" placeholder="Cidade" name="cidade" id="cidade" required>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12">
                    <label>UF</label>
                    <br>
                    <input type="text" placeholder="UF" name="uf" id="uf" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12" text-allign: center><input type="submit" class="button" name="enviar" value="ENVIAR"></div>
            </div>
        </form>

    </div>
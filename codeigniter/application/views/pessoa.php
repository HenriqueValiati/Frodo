<script src="bootstrap-3/js/personalizados/pessoa.js"></script>
<title>Cadastro de Pessoas</title>

<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-2 main ">

</div>


<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalId"><span class="fa fa-accessible-icon"></span>NOVO</button>

<div class="modal fade" id="modalId" role="dialog" aria-labelledby="gridSystemModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">

                <form method="post" action="<?php echo base_url() . 'Pessoa/recebe_dados' ?>">
                    <div class="row form-group">
                        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12"></div>

                        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                            <h2 style="text-align: center">Cadastro</h2>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                            <label for="nome">Nome Completo</label>
                            <input class="form-control" type="text" placeholder="Nome Completo" name="nome" id="nome" required>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                            <label for="documento">CPF/Passaporte</label>
                            <br>
                            <input class="form-control" type="text" placeholder="CPF/Passaporte" name="documento" id="documento" required>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                            <label for="email">E-mail</label>
                            <br>
                            <input class="form-control" type="text" placeholder="E-mail" name="email" id="email" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                            <label for="fone">Telefone</label>
                            <br>
                            <input class="form-control" type="text" placeholder="Telefone" name="fone" id="fone" required>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                            <label for="nascimento">Data de Nascimento</label>
                            <br>
                            <input class="form-control" type="date" name="nascimento" id="nascimento" required>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                            <label for="pais">País</label>
                            <br>
                            <input class="form-control" type="text" placeholder="País" name="pais" id="pais" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12"> 
                            <label for="endereco">Endereço</label>
                            <br>
                            <input class="form-control" type="text" placeholder="Endereço" name="endereco" id="endereco" required>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                            <label for="numero">Número</label>
                            <br>
                            <input class="form-control" type="number" placeholder="Número" name="numero" id="numero">
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                            <label for="cidade">Cidade</label>
                            <br>
                            <input class="form-control" type="text" placeholder="Cidade" name="cidade" id="cidade" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12"></div>
                        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                            <label for="uf">UF</label>
                            <br>
                            <input class="form-control" type="text" placeholder="UF" name="uf" id="uf" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12" text-allign: center><input type="submit" class="btn btn-primary" name="enviar" value="ENVIAR"></div>
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



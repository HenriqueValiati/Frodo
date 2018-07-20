<title>Login</title>
<?php
require 'principal.php';
?>
</header>
    <body>
        <form method="post" class="formLogin" action="<?php echo base_url() . 'Login/efetua_login' ?>">
            <div class="container col-md-offset-3 col-md-4 col-lg-offset-3 col-lg-4 col-sm-12 col-xs-12">
                <div class="card">
                    <h4>LOGIN</h4>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="input-group">
                            <span class="input-group-text" for="usuario">Usuário</span>
                            <input type="text" class="form-control" id="usuario">
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-text" for="senha">Senha</span>
                            <input type="password" class="form-control" id="senha">
                        </div>
                        <br>
                        <div class="float-right">
                            <button type="submit" class="btn btn btn-secondary">ENTRAR</button>                        
                        </div>
                    </div>
                </div>
                <span style="text-align: right">Curso Web 2018 ©</span>
            </div>
        </form>
    </body>
</html>

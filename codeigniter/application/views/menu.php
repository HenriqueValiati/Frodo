<!doctype html>
<html lang="pt-br">
    <header>
        <link href="bootstrap-4/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="fontawesome-5/web-fonts-with-css/css/fontawesome-all.css" rel="stylesheet"/>
        <meta charset="utf-8" width=device-width, initial-scale=1.0>

        <style type="text/css">
            #div {
                font-family: "Arial";
                margin: auto;
                width: 1100px;
                height: 750px;
                border: 1px solid black;
                font-size: 18px;
            }
            .button {
                border: 2px solid black;
                color: black;
                background-color: white; 
                padding: 8px 20px;
                text-align: center;
                display: inline-block;
                font-size: 14px;
                font-weight: bold;
                margin: 2px 2px;
                cursor: pointer;
                border-radius: 8px;
            }
            .button:hover {
                background-color: gray;
                color: white;
                border: 2px solid black;
            }
            a {
                text-decoration:none;
            }
            table, td {
                margin: auto;
                border-collapse: collapse;
                padding: 15px;
            }
            th {
                text-align: center;
            }
            input {
                width: 200px
            }
            label {
                text-align: left;

            }
            #menu {
                width:100%;
                overflow:hidden;
                height:30px;
                text-decoration:none;
                border: 1px solid black;
                padding: 0px 20px;
            }
        </style>

</header>
<body>
    <div id="menu">
        <a href="<?php echo base_url() . 'pessoa' ?>" title="Cadastrar Pessoa">CADASTRAR</a>
        <a href="<?php echo base_url() . 'listar' ?>" title="Listar Pessoas">LISTAR</a>
    </div>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Bem-vindo ao @bobrinha</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <style type="text/css">
            body {
                padding-top: 40px;
                padding-bottom: 40px;
                background-color: #f5f5f5;
            }
            .form-signin {
                max-width: 300px;
                padding: 19px 29px 29px;
                margin: 0 auto 20px;
                background-color: #fff;
                border: 1px solid #e5e5e5;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
                -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
            }
            .form-signin .form-signin-heading,
            .form-signin .checkbox {
                margin-bottom: 10px;
            }
            .form-signin input[type="text"],
            .form-signin input[type="password"] {
                font-size: 16px;
                height: auto;
                margin-bottom: 15px;
                padding: 7px 9px;
            }
            .blockDialogo{ 
                position:absolute; 
                top:0; 
                left:0; 
                background-color:rgba(0,0,0,0.7);
                width:100%; 
                height:100%; 
                display:none; 
            } 
            .dialogo{
                position:absolute;
                background-color:#f9f9f9; 
                width:50%; 
                height:50%;
                top: 25%;
                left: 25%;
                border:2px solid #999999;
                padding: 2px;		
            } 
        </style>
        <link href="<?= base_url(); ?>assets/css/bootstrap-responsive.css" rel="stylesheet">
        <script type="text/javascript">
            var base_url = '<?php echo base_url(); ?>';
        </script>
        <link rel="shortcut icon" href="<?= base_url(); ?>assets/ico/favicon.png">
        <script src="<?= base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/login.js"></script>
        <script src="<?= base_url(); ?>assets/js/logout.js"></script>
        <?php
        Sys_Controller::incluir_form_validation();
        Sys_Controller::incluir_blockUI();
        ?>
    </head>
    <body>
        <div>
            <div class="container">
                <form id="form" name="form_fazer_login" method="post" class="form-signin formValidation">
                    <img width="70" height="70" class="social-avatar pull-left" src="<?= base_url(); ?>assets/img/abobrinha.png" />
                    <h3 class="form-signin-heading">Faça seu Login</h3>
                    <input name="email" id="email" type="text" class="input-block-level validate[required,custom[email]]" placeholder="E-mail">
                    <input name="senha" id="senha" type="password" class="input-block-level validate[required]" placeholder="Senha">
                    <label class="checkbox">
                        <input type="checkbox" value="remember-me"> Lembrar-me
                    </label>
                    <button class="btn btn-lg btn-primary" type="submit">Entrar</button>
                    <a href="cadastro">Cadastrar-se</a>
                </form>
            </div>  
        </div> 
    </body>
</html>



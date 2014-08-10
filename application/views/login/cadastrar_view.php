<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Bem-vindo ao @bobrinha</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="<?= base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/css/datepicker.css" rel="stylesheet">
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

        </style>
        <link href="<?= base_url(); ?>assets/css/bootstrap-responsive.css" rel="stylesheet">
        


        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="../assets/js/html5shiv.js"></script>
        <![endif]-->

        <!-- Fav and touch icons -->
        <link rel="shortcut icon" href="<?= base_url(); ?>assets/ico/favicon.png">
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?= base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/bootstrap.js"></script>
        <script src="<?= base_url(); ?>assets/js/login.js"></script>
        <script src= "<?=base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
        <?php
        Sys_Controller::incluir_form_validation();
        Sys_Controller::incluir_blockUI();
        ?>

    </head>

    <body>

        <div class="container">
            <form id="form_cadastrar" action="cadastro/create" name="" method="post" class="form-signin formValidation">
                <h2 class="form-signin-heading">Cadastre-se</h2>
                <input name="nome" id="nome" type="text" class="input-block-level" placeholder="Nome">
                <input name="sobrenome" id="sobrenome" type="text" class="input-block-level" placeholder="Sobrenome">
                <input name="email" id="email" type="text" class="input-block-level validate[required,custom[email]]" placeholder="E-mail">
<!--                <input name="emailconf" id="email" type="text" class="input-block-level validate[required,custom[email]]" placeholder="E-mail">-->
                <input name="senha" id="senha" type="password" class="input-block-level validate[required]" placeholder="Senha">
<!--                <input name="data_nascimento" id="data_nascimento" type="text" class="input-block-level validate[required]" placeholder="Data de Nascimento">-->
              
                    <input class="span2"  id="dp1" size="16" type="text"  name="data_nascimento" value=""></br>
                                 
                    <input type="radio" name="sexo" value="0" checked>Masuclino <input type="radio" name="sexo" value="1">Feminino</br>
                </br><!--
<!--                <input name="sexo" id="senha" type="text" class="input-block-level validate[required]" placeholder="Sexo">-->
                <label class="checkbox">
                    <input type="checkbox" value="remember-me">Lembrar-me
                </label>
                <button class="btn btn-large btn-primary" type="submit">Cadastrar-se</button>
            </form>

        </div> <!-- /container -->

    </body>
    
    
    <script type="text/javascript">
            var base_url = '<?php echo base_url(); ?>';
          
            
            $(function()
            {
                $('#dp1').datepicker({
                    format:'yyyy-mm-dd'
                    
                });
                 // $('.datepicker').datepicker();
            });
            
        </script>
</html>
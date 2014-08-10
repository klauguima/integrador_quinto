<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@bobrinha</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <script type="text/javascript">
            var base_url = '<?php echo base_url(); ?>';
        </script>
        <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" media="all" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/css/font-awesome.css" media="all" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>assets/css/style.css" media="all" rel="stylesheet" type="text/css" />
        <script src="<?= base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js" type="text/javascript"></script>
        <script src="<?= base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?= base_url(); ?>assets/js/jquery.isotope.min.js" type="text/javascript"></script>
        <script src="<?= base_url(); ?>assets/js/masonry.min.js" type="text/javascript"></script>
        <script src="<?= base_url(); ?>assets/js/main.js" type="text/javascript"></script>
        <script src="<?= base_url(); ?>assets/js/logout.js" type="text/javascript"></script>
        <?php
        Sys_Controller::incluir_form_validation();
        Sys_Controller::incluir_blockUI();
        ?>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
        <link rel="shortcut icon" href="<?= base_url(); ?>assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url(); ?>assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url(); ?>assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url(); ?>assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?= base_url(); ?>assets/ico/apple-touch-icon-57-precomposed.png">
         <style type="text/css">
            body{ 
                font-family: 'lucida grande', tahoma, verdana, arial, sans-serif;
            }
            .contentArea{
                width:600px;
                margin:0 auto;
            }
            #inputSearch
            {
                width:350px;
                border:solid 1px #CCC;
                padding:3px;
                border-radius: 4px;
            }
            #divResult
            {
                position:absolute;
                width:350px;
                display:none;
                margin-top:-1px;
                border:solid 1px #dedede;
                border-top:0px;
                overflow:hidden;
                border-bottom-right-radius: 6px;
                border-bottom-left-radius: 6px;
                -moz-border-bottom-right-radius: 6px;
                -moz-border-bottom-left-radius: 6px;
                box-shadow: 0px 0px 5px #999;
                border-width: 3px 1px 1px;
                border-style: solid;
                border-color: #333 #DEDEDE #DEDEDE;
                background-color: white;
            }
            .display_box
            {
                padding:4px; border-top:solid 1px #dedede; 
                font-size:12px; height:50px;
            }
            .display_box:hover
            {
                background:#3bb998;
                color:#FFFFFF;
                cursor:pointer;
            }
        </style>
        <script>
            $(function() {
                $(".search").keyup(function()
                {
                    var inputSearch = $(this).val();
                    var dataString = 'searchword=' + inputSearch;
                    if (inputSearch != '')
                    {
                        $.ajax({
                            type: "POST",
                            url: base_url +'pesquisa',
                            data: dataString,
                            cache: false,
                            success: function(html)
                            {
                                $("#divResult").html(html).show();
                            }
                        });
                    }
                    return false;
                });

                $("#divResult").on("click", '', function(e) {
                    var $clicked = $(e.target);
                    var $name = $clicked.find('.name').html();
                    var decoded = $("<div/>").html($name).text();
                    $('#inputSearch').val(decoded);
                });
                $(document).on("click", '', function(e) {
                    var $clicked = $(e.target);
                    if (!$clicked.hasClass("search")) {
                        $("#divResult").fadeOut();
                    }
                });
                $('#inputSearch').click(function() {
                    $("#divResult").fadeIn();
                });
            });
        </script>
    </head>
    <body>
        <div class="navbar navbar-fixed-top scroll-hide">
            <div class="container-fluid top-bar">
                <div class="pull-right">
                    <ul class="nav navbar-nav pull-right">
                        <li class="dropdown user hidden-xs"><a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <img width="34" height="34" src="<?= base_url(); ?>/assets/img/family_guy__peter.gif" />  <?php echo $this->session->userdata('nome');?><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">
                                        <i class="icon-user" id="perfil_usuário"></i>Meu Perfil</a>
                                </li>
                                <li><a id="logout" href="#">
                                        <i class="icon-signout" ></i>Sair</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <button class="navbar-toggle"></button><a class="logo" href="principal"></a>
                <form class="navbar-form form-inline col-lg-2 hidden-xs">
                    <input id="inputSearch" class="search" placeholder="Pesquisar" type="text"> <span><i class="icon-search"></i></span>
                    <div id="divResult">
                    </div>
                </form>
            </div>
            <div class="container-fluid main-nav clearfix">
                <div class="nav-collapse">
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="col-md-3">
                    <div class="well sidebar-nav">
                        <ul class="nav nav-list">
                            <li class="nav-header">Bem-Vindo</li>
                            <li class="active"><a href="#">Feed de Notícias</a></li>
                            <li><a href="#">Mensagens</a></li>
                            <li><a href="#">Eventos</a></li>
                            <li><a href="#">Encontrar Amigos</a></li>
                            <li class="nav-header">Amigos</li>
                            <li><a href="#">Melhores Amigos</a></li>
                            <li><a href="#">Conhecidos</a></li>
                            <li><a href="#">Família</a></li>
                        </ul>
                    </div>
                </div>

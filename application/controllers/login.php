<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
require_once 'Sys_Controller.php';
class login extends Sys_Controller {
    function __construct() {
        parent::__construct();
    }
    function index() {
        $this->load->view('login/login_view');
    }
    public function ajax_login() {
        $this->load->model('login_model'); //carregando o model
        $query = $this->login_model->logar(); //e coloca na variavel login e chama o logar
        if ($query) {
            $this->session->set_userdata($query->row_array());
            die(json_encode(array('retorno' => TRUE)));
        } else {
            die(json_encode(array('retorno' => FALSE, 'mensagem' => "Usuário não Encontrado")));
        }
    }
    function logged() {
     $id_usuario = $this->session->userdata('id_usuario');
       if (!isset($id_usuario)) {
           echo 'Voce nao tem permissao para entrar nessa pagina. <a href="">Efetuar Login</a>';
          die();
      }
    }
    public function esqueciMinhaSenha() {
        $this->load->view('login/login_view');
    }
    public function ajax_logout() {
       $this->session->sess_destroy();
    }
}
?>
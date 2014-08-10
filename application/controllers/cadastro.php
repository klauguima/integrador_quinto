<?php
/**
 * Description of cadastro
 *
 * @author Keila
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
include 'Sys_Controller.php';

class cadastro extends Sys_Controller {

    //put your code here
    function __construct() {
        parent::__construct();
    }
    function index() {
        $this->load->view('login/cadastrar_view');
    }
    public function create() {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['title'] = 'Create a news item';
        $this->form_validation->set_rules('nome', 'Nome', 'required');
        $this->form_validation->set_rules('sobrenome', 'Sobrenome', 'required');
        $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');
        $this->form_validation->set_rules('senha', 'Senha', 'required');
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('login/cadastrar_view');
        } 
        else 
        {
            $data = array(
                'nome' => $this->input->post('nome'),
                'sobrenome' => $this->input->post('sobrenome'),
                'email' => $this->input->post('email'),
                'senha'=> md5($this->input->post('senha')),
                'data_nascimento' => $this->input->post('data_nascimento'),
                'sexo' => $this->input->post('sexo'),
                'status'=> 1
            );
            $this->load->model('cadastro_model');
            $this->cadastro_model->cadastrar($data);
            redirect('principal');
        }
    }

}
?>

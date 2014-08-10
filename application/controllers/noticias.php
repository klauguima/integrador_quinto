<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
require_once 'Sys_Controller.php';

class noticias extends Sys_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    function index() {
        $this->load->view('upload_form', array('error' => ' '));
    }

    function cadastrar() {
        try {
            if ($this->input->post('texto')||$_FILES["midias"]["size"]) {
                $arrNoticia = array();
                $arrNoticia['idusuario'] = $this->session->userdata('id_usuario');
                $arrNoticia['mensagem'] = $this->input->post('texto');

                if ($_FILES["midias"]["size"]) {
                    $data_agora = date('d_m_y_h_i_s');
                    $config['upload_path'] = './uploads'; //diretório das imagens e videos
                    $config['allowed_types'] = 'gif|jpg|png|mp4|mp3'; //tipos de itens
                    $config['max_size'] = '9000';
                    $config['max_width'] = '9000';
                    $config['max_height'] = '9000';
                    $config['file_name'] = $this->session->userdata('id_usuario') . "-" . $data_agora . "-" . $_FILES["midias"]["name"];
                    $arrNoticia['url_figura'] = $config['file_name'];

                    $this->load->library('upload', $config);

                    if (!$this->upload->do_upload("midias")) {
                        throw new Exception($this->upload->display_errors());
                    }
                }

                $this->load->model('noticias_model');
                $this->noticias_model->cadastrar($arrNoticia);

                die(json_encode(array('retorno' => TRUE)));
            }
        } catch (Exception $ex) {
            die(json_encode(array('retorno' => FALSE, 'mensagem' => $ex->getMessage())));
        }
    }

}

?>

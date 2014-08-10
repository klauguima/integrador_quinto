<?php

/**
 * Description of Sys_Controller
 *
 * @author CLAUDIA
 */
class Sys_Controller extends CI_Controller {

    public function incluir_cabecalho() {
        $this->load->view('includes/cabecalho');
    }

    public function incluir_rodape() {
        $this->load->view('includes/rodape');
    }

    public function load_view($view) {
        $this->incluir_cabecalho(); //chamando as funções estaticas
        $this->load->view($view);
        $this->incluir_rodape();
    }

    public static function incluir_form_validation() {
        echo link_tag(base_url() . 'assets/plugins/form-validation/style.css');
        echo '<script src="' . base_url() . 'assets/plugins/form-validation/jquery.validationEngine.js"></script>';
        echo '<script src="' . base_url() . 'assets/plugins/form-validation/jquery.validationEngine-en.js"></script>';
        echo '<script src="' . base_url() . 'assets/plugins/form-validation/custom-validation.js"></script>';
    }

    public static function incluir_blockUI() {
        echo '<script src="' . base_url() . 'assets/plugins/jquery-block/jquery.blockUI.js"></script>';
        echo '<script src="' . base_url() . 'assets/plugins/jquery-block/custom-block.js"></script>';
    }

}

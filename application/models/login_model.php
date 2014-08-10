<?php

class login_model extends CI_Model {

    public function logar() {
        $this->db->where('email', $this->input->post('email'));
        $this->db->where('senha', md5($this->input->post('senha')));
        $query = $this->db->get('usuarios');
        if ($query->num_rows == 1) {
            return $query; // RETORNA VERDADEIRO
        }
    }

    public function pesquisar($palavra) {
        $this->db->like('nome', $palavra);
        return $this->db->get('usuarios');
    }

}

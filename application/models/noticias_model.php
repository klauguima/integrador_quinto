<?php

/**
 * Description of cadastro_noticias_model
 *
 * @author CLAUDIA
 */
class noticias_model extends CI_Model{

    public function cadastrar($data) {
        return $this->db->insert('mensagens', $data);
    }

}

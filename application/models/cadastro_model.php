<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cadastro_model
 *
 * @author Keila
 */
class cadastro_model extends CI_Model {

   

    //put your code here
    public function cadastrar($data) {
        return  $this->db->insert('usuarios', $data);
    }

}

?>

<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
include 'Sys_Controller.php';

class pesquisa extends Sys_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->model('login_model'); //carregando o model
        $query = $this->login_model->pesquisar($this->input->post('searchword'));
        // $query = $this->login_model->pesquisar('keila');
         $q='';
        foreach ($query->result() as $row) {
            $username = $row->nome;
            $email = $row->email;
            $media = 'http://localhost/CodeIgniter_2.2.0/assets/img/family_guy__peter.gif';
            $country = '';
            $b_username = '<b>' . $q . '</b>';
            $b_email = '<b>' . $q . '</b>';
            $final_username = str_ireplace($q, $b_username, $username);
            $final_email = str_ireplace($q, $b_email, $email);
            ?>
            <div class="display_box" align="left">
                <img src="<?php echo $media; ?>" style="width:50px; height:50px; float:left; margin-right:6px;" />
                <span class="name"><?php echo $final_username; ?></span>&nbsp;<br/><?php echo $final_email; ?><br/>
                <span style="font-size:9px; color:#999999"><?php echo $country; ?></span></div>
            <?php
        }
    }

}
?>

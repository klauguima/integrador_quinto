<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
require_once 'Sys_Controller.php';


class principal extends Sys_Controller {
    
    function __construct() {
        parent::__construct();
        require_once 'login.php';
        $login = new login();  
        $login->logged();
       
    }
    
    public function index() {
        $this->load_view('principal_view.php');
    }
}


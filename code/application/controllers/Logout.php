<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
       // $this->load->model('Dashbord_model');
        //$this->load->model('Init_model');
        $this->load->library('session');
    }
    
    public function index(){
        $this->is_logged_in();
        $this->session->sess_destroy();
        redirect(base_url());
    }
    public function is_logged_in(){
        
        
        $is_logged_in = $this->session->userdata('logged_in');
        
        if(!isset($is_logged_in) || $is_logged_in!==TRUE)
        {
            redirect(base_url());
        }
    }
    
}
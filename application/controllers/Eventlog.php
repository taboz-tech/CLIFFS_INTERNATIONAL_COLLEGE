<?php
defined('BASEPATH') OR exit('');

/**
 * Description of Eventlog
 *
 * @author Tavonga <mafuratavonga@gmail.com>
 * @date 1st Jan, 2023
 */
class Eventlog extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        
        $this->genlib->checkLogin();
        
        $this->genlib->superOnly();
    }
    
    
    public function index(){
        $data['pageContent'] = $this->load->view('eventlog', '', TRUE);
        $data['pageTitle'] = "Eventlog";
        
        $this->load->view('main', $data);
    }
}
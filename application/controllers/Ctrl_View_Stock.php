<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctrl_View_Stock extends CI_Controller {

	public function getView_All(){
        $this->load->helper('assets_helper');
        $this->load->model('View_Stock');
        $data = array();
        $data['data'] =  $this->View_Stock->get_All_View_Stock();
        $this->load->view('liste_Stock',$data);
    }

}

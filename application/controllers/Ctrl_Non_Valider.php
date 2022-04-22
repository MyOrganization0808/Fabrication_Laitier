<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class Ctrl_Non_Valider extends CI_Controller
{


    public function getNon_Valider_All(){
        $this->load->helper('assets_helper');
        $this->load->model('User_Normal');
        $data = array();
        $data['data'] =  $this->User_Normal->get_All_Non_Valider();
        $this->load->view('liste_En_Attente',$data);
    }



    public function delete(){
        $this->load->helper('assets_helper');
        $this->load->model('View_Station');
        $id = $this->input->get('id_details_carburant');
        $this->View_Station->supprimer_Detail($id);
        $data = array();
        $data['data'] =  $this->View_Station->getView();
        $this->load->view('liste_View_Station',$data);
    }


}

?>

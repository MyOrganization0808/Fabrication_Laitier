<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class Ctrl_Stock_Entrant extends CI_Controller
{

    public function lien_Vers_Insert_Stock_Entrant(){
        $this->load->helper('assets_helper');
        $this->load->model('Matiere_1er');
        $data = array();
        $data['matiere_premiere'] =  $this->Matiere_1er->get_All_Matiere_1er();
        $this->load->view('insert_Matiere_1er',$data);
    }


    public function insert_Stock_Entrant(){
        $this->load->helper('assets_helper');
        $this->load->model('Stock_Entrant');
        $this->load->model('Matiere_1er');
        $id = $this->input->post('id_Matiere_1er');
        $quantite = $this->input->post('quantite');
        $this->Stock_Entrant->insert_Stock_Entrant($quantite,$id);
        $data = array();
        $data['matiere_premiere'] =  $this->Matiere_1er->get_All_Matiere_1er();
        $this->load->view('insert_Matiere_1er',$data);
    }

    public function get_Vers_Matiere_1er(){
        $this->load->helper('assets_helper');
        $this->load->model('Stock_Entant');
        $data = array();
        $data['data'] =  $this->Stock_Entant->get_All_Stock_Entrant();
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

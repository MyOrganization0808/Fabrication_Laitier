<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class Ctrl_Produit_Fabrique extends CI_Controller
{
    public function lien_vers_insert_Produit_Fabrique(){
        $this->load->helper('assets_helper');
        $this->load->model('Produit_Fabrique');
        $this->load->model('Matiere_1er');
        $data = array();
        $data['fabrique'] =  $this->Produit_Fabrique->get_All_Produit_Fabrique();
        // $data['matiere_premiere'] =  $this->Matiere_1er->get_All_Matiere_1er();
        $this->load->view('insert_Produit_Fabrique',$data); 
    }

    public function insert_Composant_Produit_(){
        $this->load->helper('assets_helper');
        $this->load->model('Stock_Sortant');
        $this->load->model('Matiere_1er');
        $id = $this->input->post('id_Matiere_1er');
        $quantite = $this->input->post('quantite');
        $this->Stock_Sortant->insert_Stock_Sortant($quantite,$id);
        $data = array();
        $data['matiere_premiere'] =  $this->Matiere_1er->get_All_Matiere_1er();
        $this->load->view('insert_Stock_Sortant',$data);
    }




}

?>

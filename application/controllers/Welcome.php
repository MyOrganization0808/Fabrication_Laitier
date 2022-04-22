<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
        $this->load->helper('assets_helper');
        $this->load->view('index'); 
    }

    public function lien(){
        $this->load->view('login_User_Normal'); 
    }

    public function insert(){
        $this->load->helper('assets_helper');
        $this->load->view('Insert_User_Normal'); 
    }

    public function verifier_employe(){
        
    }


    public function insertsa(){
        $this->load->helper('assets_helper');
        $this->load->model('Fonctions');
        $nom = $this->input->post('nom');
        $mdp = $this->input->post('mdp');
        $this->Fonctions->insert($nom,$mdp);
        $this->load->view('postule');
    }


    public function delete(){
        $this->load->helper('assets_helper');
        $this->load->model('Fonctions');
        $id = $this->input->post('id');
        $this->Fonctions->supprimer($id);
        $this->load->view('index');
    }
}

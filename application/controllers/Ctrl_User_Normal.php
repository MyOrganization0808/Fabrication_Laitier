<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctrl_User_Normal extends CI_Controller {

	public function login_Lien_Page(){
        $this->load->helper('assets_helper');
        $this->load->view('login_User_Normal'); 
    }
    

    public function deconnexion(){
        $this->load->helper('assets_helper');
        $this->load->view('index');
    }
    
    public function insert_Lien_Page(){
        $this->load->helper('assets_helper');
        $this->load->view('insert_User_Normal'); 
    }

    public function lien_vers_insert_Produit(){
        $this->load->helper('assets_helper');
        $this->load->view('insert_Produit'); 
    }

    


    public function insert_Ctrl_Non_Valider(){
        $this->load->helper('assets_helper');
        $this->load->model('User_Normal');
        $nom = $this->input->post('nom_User_Normal');
        $email = $this->input->post('email_User_Normal');
        $mdp = $this->input->post('mdp_User_Normal');
        $this->User_Normal->insert_Non_Valider($nom,$email,$mdp);
        $this->load->view('acceuil');
    }


    //Valider utilisateur
    public function insert_Ctrl_Valider(){
        $this->load->helper('assets_helper');
        $this->load->model('User_Normal');
        
        $this->User_Normal->insert_Non_Valider($nom,$email,$mdp);
        $this->load->view('acceuil');
    }

    //Login utilisateur
    public function connexion(){
        $this->load->helper('assets_helper');
        $this->load->model('User_Normal');
        $email = $this->input->post('email');
        $mdp = $this->input->post('mdp');
        $verifier = $this->User_Normal->verifier($email,$mdp);
        if($verifier == 1){
        //     $data = array();
        //     $data['User_Normal'] =  $this->User_Normal->getEmail_User_Normal($email,$mdp);
            $this->load->view('acceuil');

        }else{
            $this->load->view('erreur');   
        }
    }

    public function valider(){

    }

}

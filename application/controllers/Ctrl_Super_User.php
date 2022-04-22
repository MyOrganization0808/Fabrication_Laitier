<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class Ctrl_Super_User extends CI_Controller
{

    public function lien_Login(){
        $this->load->helper('assets_helper');
        $this->load->view('login_Super_User');
    }

    public function deconnexion(){
        $this->load->helper('assets_helper');
        $this->load->view('index');
    }
    

    public function connexion(){
        $this->load->helper('assets_helper');
        $this->load->model('Super_User');
        $this->load->model('User_Normal');
        $email = $this->input->post('email');
        $mdp = $this->input->post('mdp');
        $verifier = $this->Super_User->verifier_Super_User($email,$mdp);
        if($verifier == 1){
            $data = array(); 
            $data['non_Valider'] =  $this->User_Normal->get_All_Non_Valider();
            $data['user_Normal'] =  $this->User_Normal->get_All_User_Normal(); 
            $this->load->view('liste_En_Attente',$data);

        }else{
            $this->load->view('erreur');
            
        }

    }

    public function insert_Ctrl_User_Normal(){
        $this->load->helper('assets_helper');
        $this->load->model('User_Normal');
        $this->load->model('Super_User');
        $id = $this->input->get('id_User_Non_Valider');
        $nom = $this->input->post('nom');
        $email = $this->input->post('email');
        $mdp = $this->input->post('mdp');
        $this->User_Normal->insert_Valider($nom,$email,$mdp);
        $this->User_Normal->valider($id);
        $data = array(); 
        $data['non_Valider'] =  $this->User_Normal->get_All_Non_Valider();
        $data['user_Normal'] =  $this->User_Normal->get_All_User_Normal(); 
        $this->load->view('liste_En_Attente',$data);
    }


    public function delete_Ctrl_User_Normal(){
        $this->load->helper('assets_helper');
        $this->load->model('User_Normal');
        $this->load->model('Super_User');
        $id = $this->input->get('id_User_Normal');
        $this->Super_User->supprimer_Detail($id);
        $data = array(); 
        $data['non_Valider'] =  $this->User_Normal->get_All_Non_Valider();
        $data['user_Normal'] =  $this->User_Normal->get_All_User_Normal(); 
        $this->load->view('liste_En_Attente',$data);
    }



    public function delete_Ctrl_Non_Valider(){
        $this->load->helper('assets_helper');
        $this->load->model('User_Normal');
        $this->load->model('Super_User');
        $id = $this->input->get('id_User_Non_Valider');
        $this->Super_User->supprimer_Non_Valider($id);
        $data = array(); 
        $data['non_Valider'] =  $this->User_Normal->get_All_Non_Valider();
        $data['user_Normal'] =  $this->User_Normal->get_All_User_Normal(); 
        $this->load->view('liste_En_Attente',$data);
    }

}

?>

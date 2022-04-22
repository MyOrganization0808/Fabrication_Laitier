<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class User_Normal extends CI_Model
{    
      private $id_User_Normal;
      private $nom_User_Normal;
      private $email_User_Normal_User_Normal;
      private $mdp_User_Normal_User_Normal;

      public function setId_User_Normal($id_User_Normal){
        $this->id_User_Normal = $id_User_Normal;
      }
      public function getId_User_Normal(){
          return $this->id_User_Normal;
      }

      public function setNom_User_Normal($nom_User_Normal){
        $this->nom_User_Normal = $nom_User_Normal;
      }
      public function getNom_User_Normal(){
          return $this->nom_User_Normal;
      }

      public function setEmail_User_Normal($email_User_Normal){
        $this->email_User_Normal = $email_User_Normal;
      }
      public function getEmail_User_Normal(){
          return $this->email_User_Normal;
      }

      public function setMdp_User_Normal($mdp_User_Normal){
        $this->mdp_User_Normal = $mdp_User_Normal;
      }
      public function getMdp_User_Normal(){
          return $this->mdp_User_Normal;
      }


      public function __construct($id_User_Normal='' , $nom_User_Normal='' , $email_User_Normal='',$mdp_User_Normal='')
      {
          parent::__construct();
          $this->setId_User_Normal($id_User_Normal);
          $this->setNom_User_Normal($nom_User_Normal);
          $this->setEmail_User_Normal($email_User_Normal);
          $this->setMdp_User_Normal($mdp_User_Normal);

      }

        // public function valider($id){
        //   date_default_timezone_set('utchgf');
        //   $config = array(
        //     'protocole' =>'smtp',
        //     'smtp_host' =>'smtp.googlemail.com',
        //     'smtp_port' =>'465',
        //     'smtp_user' =>'tolotraitu@gmail.com',
        //     'smtp_mdp' =>'qwertyuioP1234!',
        //     'smtp_crypto' =>'ssl',
        //     'mailtype' =>'html',
        //     'starttls' => true,
        //     'newline' => "\r\n"
        //   );

        //   $this->load->library('email');
        //   $this->email->initialize($config);
        //   $this->email->from('andrianarivo24@gmail.com');
        //   $this->email->to('nyari31sept@gmail.com');
        //   $this->email->subject('Validation de compte');
        //   $this->email->message('Votre compte est valider');
        //   // if($this->email->send()){
        //   //   $this->u->validUser($id);
        //   // }else{
        //   //   show_error($this->email->print_debugger());
        //   // }
        // }

      
      public function insert_Valider($nom_User_Normal,$email_User_Normal, $mdp_User_Normal){
        $sql = "insert into user_Normal values(default, %s, %s, %s)";
        $sql = sprintf($sql, $this->db->escape($nom_User_Normal),$this->db->escape($email_User_Normal), $this->db->escape($mdp_User_Normal));
        $this->db->query($sql);
    }

      


      public function verifier($email_User_Normal , $mdp_User_Normal){
        $sql = "select count(*) as verifier from user_Normal where email_User_Normal = %s and mdp_User_Normal =%s";
        $sql = sprintf($sql , $this->db->escape($email_User_Normal), $this->db->escape($mdp_User_Normal));
        $query= $this->db->query($sql);
        $rows = $query->row_array();
        $retour= $rows['verifier'];
        return $retour;
    }

    public function get_All_User_Normal(){
      $query = $this->db->query("select * from user_Normal");
      $view = array();
      foreach($query->result_array() as $row){
          $temp = new User_Normal();
          $temp->setId_User_Normal($row['id_user_normal']);
          $temp->setNom_User_Normal($row['nom_user_normal']);
          $temp->setEmail_User_Normal($row['email_user_normal']);
          $temp->setMdp_User_Normal($row['mdp_user_normal']);
          $view[] = $temp;
      }
      return $view;
    }

      public function get_All_Non_Valider(){
        $query = $this->db->query("select * from user_Non_Valider");
        $view = array();
        foreach($query->result_array() as $row){
            $temp = new User_Normal();
            $temp->setId_User_Normal($row['id_user_non_valider']);
            $temp->setNom_User_Normal($row['nom_user_normal']);
            $temp->setEmail_User_Normal($row['email_user_normal']);
            $temp->setMdp_User_Normal($row['mdp_user_normal']);
            $view[] = $temp;
        }
        return $view;
      }

      public function getSimple_Non_Valider($id_Non_Valider){
        $sql  = "select * from user_Non_Valider where id_User_Non_Valider = '". $nom_User_Normal ."'" ;
        
        $query = $this->db->query($sql);
        $view = new User_Normal();
        foreach($query->result_array() as $row){
            $view->setId_User_Normal($row['id_user_non_valider']);
            $view->setNom_User_Normal($row['nom_user_normal']);
            $view->setEmail_User_Normal($row['email_user_normal']);
            $view->setMdp_User_Normal($row['mdp_user_normal']);
        }
        return $view;
      }


      public function getId($id){
        $sql  = "select * from user_Non_Valider where id_User_Non_Valider= '". $id ."'" ;
        
        $query = $this->db->query($sql);
        $view = new Pompiste();
        foreach($query->result_array() as $row){
            $view->setId_Pompiste($row['id_user_normal']);
            $view->setNom_Pompiste($row['nom_user_normal']);
            $view->setEmail($row['email_user_normal']);
            $view->setMdp($row['mdp_user_normal']);
        }
        return $view;
      }

      // public function getId($id){
      //   $sql  = "select * from user_Normal where id_User_Normal= '". $id ."'" ;
        
      //   $query = $this->db->query($sql);
      //   $view = new User_Normal();
      //   foreach($query->result_array() as $row){
      //       $view->setId_User_Normal($row['id_User_Normal']);
      //       $view->setNom_User_Normal($row['nom_User_Normal']);
      //       $view->setEmail_User_Normal($row['email_User_Normal']);
      //       $view->setMdp_User_Normal($row['mdp_User_Normal']);
      //   }
      //   return $view;
      // }





}

?>


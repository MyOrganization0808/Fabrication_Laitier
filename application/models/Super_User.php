<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class Super_User extends CI_Model
{    
      private $email_Super_User;
      private $mdp_Super_User;

      public function setEmail_Super_User($email_Super_User){
        $this->email_Super_User = $email_Super_User;
      }
      public function getEmail_Super_User(){
          return $this->email_Super_User;
      }

      public function setMdp_Super_User($mdp_Super_User){
        $this->mdp_Super_User = $mdp_Super_User;
      }
      public function getMdp_Super_User(){
          return $this->mdp_Super_User;
      }


      public function __construct( $email_Super_User='',$mdp_Super_User='')
      {
          $this->setEmail_Super_User($email_Super_User);
          $this->setMdp_Super_User($mdp_Super_User);
      }


    public function verifier_Super_User($email_Super_User , $mdp_Super_User){
        $sql = "select count(*) as verifier from super_User where email_Super_User = %s and mdp_Super_User=%s";
        $sql = sprintf($sql , $this->db->escape($email_Super_User), $this->db->escape($mdp_Super_User));
        $query= $this->db->query($sql);
        $rows = $query->row_array();
        $retour= $rows['verifier'];
        return $retour;
    }


    public function insert_Non_Valider($nom_User_Normal,$email_User_Normal, $mdp_User_Normal){
        $sql = "insert into user_Non_Valider values(default, %s, %s, %s)";
        $sql = sprintf($sql, $this->db->escape($nom_User_Normal),$this->db->escape($email_User_Normal), $this->db->escape($mdp_User_Normal));
        $this->db->query($sql);
    }


    public function supprimer_Detail($id){
      $sql = "delete from user_Normal where id_User_Normal = %d";
      $sql = sprintf($sql, $id);
      $this->db->query($sql);
  }


  public function supprimer_Non_Valider($id){
    $sql = "delete from user_Non_Valider where id_User_Non_Valider= %d";
    $sql = sprintf($sql, $id);
    $this->db->query($sql);
}



}

?>


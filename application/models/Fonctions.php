<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class Fonctions extends CI_Model
{

    public function verifier_Admin($email_Admin , $mdp_Admin){
        $sql = "select count(*) as verifier from admin where email_Admin = %s and mdp_Admin=%s";
        $sql = sprintf($sql , $this->db->escape($email_Admin), $this->db->escape($mdp_Admin));
        $query= $this->db->query($sql);
        $rows = $query->row_array();
        $retour= $rows['verifier'];
        return $retour;
    }


    public function insert($nom, $mdp){
        $sql = "insert into poste values(default, %s, %s)";
        $sql = sprintf($sql, $this->db->escape($nom), $this->db->escape($mdp));
        $this->db->query($sql);
    }


    public function supprimer($id){
        $sql = "delete from user where id = %d";
        $sql = sprintf($sql, $this->db->espace($id));
        $this->db->query($sql);
    }
}

?>

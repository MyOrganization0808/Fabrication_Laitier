<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class Produit_Fabrique extends CI_Model
{    
      private $id_Produit_Fabrique;
      private $nom_Produit_Fabrique;

      public function setId_Produit_Fabrique($id_Produit_Fabrique){
        $this->id_Produit_Fabrique = $id_Produit_Fabrique;
      }
      public function getId_Produit_Fabrique(){
          return $this->id_Produit_Fabrique;
      }

      public function setNom_Produit_Fabrique($nom_Produit_Fabrique){
        $this->nom_Produit_Fabrique = $nom_Produit_Fabrique;
      }
      public function getNom_Produit_Fabrique(){
          return $this->nom_Produit_Fabrique;
      }


    public function get_All_Produit_Fabrique(){
      $query = $this->db->query("select * from Produit_Fabrique");
      $view = array();
      foreach($query->result_array() as $row){
          $temp = new Produit_Fabrique();
          $temp->setId_Produit_Fabrique($row['id_produit_fabrique']);
          $temp->setNom_Produit_Fabrique($row['nom_produit']);
          $view[] = $temp;
      }
      return $view;
    }


    public function insert_Stock_Sortant($quantite_Sortant, $id_Matiere_1er){
      $sql = "insert into stock_Sortant values(default, %d, %d)";
      $sql = sprintf($sql,$quantite_Sortant, $id_Matiere_1er);
      $this->db->query($sql);
  }



}

?>


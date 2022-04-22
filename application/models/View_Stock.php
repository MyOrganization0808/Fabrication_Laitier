<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class View_Stock extends CI_Model
{
    private $id_Matiere_1er;
    private $nom_Matiere_1er;
    private $quantite_Restant;



      public function setId_Matiere_1er($id_Matiere_1er){
        $this->id_Matiere_1er = $id_Matiere_1er;
      }
      public function getId_Matiere_1er(){
          return $this->id_Matiere_1er;
      }

      public function setNom_Matiere_1er($nom_Matiere_1er){
        $this->nom_Matiere_1er = $nom_Matiere_1er;
      }
      public function getNom_Matiere_1er(){
          return $this->nom_Matiere_1er;
      }

      public function setQuantite_Restant($quantite_Restant){
        $this->quantite_Restant = $quantite_Restant;
      }
      public function getQuantite_Restant(){
          return $this->quantite_Restant;
      }


    public function get_All_View_Stock(){
      $query = $this->db->query("select * from view_Stock");
      $view = array();
      foreach($query->result_array() as $row){
          $temp = new View_Stock();
          $temp->setId_Matiere_1er($row['id_matiere_1er']);
          $temp->setNom_Matiere_1er($row['nom_matiere_1er']);
          $temp->setQuantite_Restant($row['quantite_restant']);
          $view[] = $temp;
      }
      return $view;
    }


}

?>


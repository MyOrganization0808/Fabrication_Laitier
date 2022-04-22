<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class Matiere_1er extends CI_Model
{    
      private $id_Matiere_1er;
      private $nom_Matiere_1er;

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


    public function get_All_Matiere_1er(){
      $query = $this->db->query("select * from Matiere_1er");
      $view = array();
      foreach($query->result_array() as $row){
          $temp = new Matiere_1er();
          $temp->setId_Matiere_1er($row['id_matiere_1er']);
          $temp->setNom_Matiere_1er($row['nom_matiere_1er']);
          $view[] = $temp;
      }
      return $view;
    }



}

?>


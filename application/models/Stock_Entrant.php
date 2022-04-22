<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class Stock_Entrant extends CI_Model
{
    private $id_Stock_Entrant;
    private $quantite_Entrant;
    private $id_Matiere_1er;

      public function setId_Stock_Entrant($id_Stock_Entrant){
        $this->id_Stock_Entrant = $id_Stock_Entrant;
      }
      public function getId_Stock_Entrant(){
          return $this->id_Stock_Entrant;
      }

      public function setQuantite_Entrant($quantite_Entrant){
        $this->quantite_Entrant = $quantite_Entrant;
      }
      public function getQuantite_Entrant(){
          return $this->quantite_Entrant;
      }

      public function setId_Matiere_1er($id_Matiere_1er){
        $this->id_Matiere_1er = $id_Matiere_1er;
      }
      public function getId_Matiere_1er(){
          return $this->id_Matiere_1er;
      }


    public function get_All_Stock_Entrant(){
      $query = $this->db->query("select * from stock_Entrant");
      $view = array();
      foreach($query->result_array() as $row){
          $temp = new Stock_Entrant();
          $temp->setId_Stock_Entrant($row['id_stock_entrant']);
          $temp->setQuantite($row['quantite_entrant']);
          $temp->setId_Matiere_1er($row['id_matiere_1er']);
          $view[] = $temp;
      }
      return $view;
    }


    public function insert_Stock_Entrant($quantite_Entrant, $id_Matiere_1er){
        $sql = "insert into stock_Entrant values(default, %d, %d)";
        $sql = sprintf($sql,$quantite_Entrant, $id_Matiere_1er);
        $this->db->query($sql);
    }



}

?>


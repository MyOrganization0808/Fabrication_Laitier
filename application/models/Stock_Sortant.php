<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class Stock_Sortant extends CI_Model
{
    private $id_Stock_Sortant;
    private $quantite_Sortant;
    private $id_Matiere_1er;

      public function setId_Stock_Sortant($id_Stock_Sortant){
        $this->id_Stock_Sortant = $id_Stock_Sortant;
      }
      public function getId_Stock_Sortant(){
          return $this->id_Stock_Sortant;
      }

      public function setQuantite_Sortant($quantite_Sortant){
        $this->quantite_Sortant = $quantite_Sortant;
      }
      public function getQuantite_Sortant(){
          return $this->quantite_Sortant;
      }

      public function setId_Matiere_1er($id_Matiere_1er){
        $this->id_Matiere_1er = $id_Matiere_1er;
      }
      public function getId_Matiere_1er(){
          return $this->id_Matiere_1er;
      }


    public function get_All_Stock_Sortant(){
      $query = $this->db->query("select * from stock_Sortant");
      $view = array();
      foreach($query->result_array() as $row){
          $temp = new Stock_Sortant();
          $temp->setId_Stock_Sortant($row['id_stock_Sortant']);
          $temp->setQuantite($row['quantite_Sortant']);
          $temp->setId_Matiere_1er($row['id_matiere_1er']);
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


<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class Formule extends CI_Model
{    
      private $id_Formule;
      private $id_Produit_Fabrique;
      private $lait;
      private $sucre;
      private $parfum;
      private $conservateur;
      private $colorant;
      private $fruit;


      public function setId_Formule($id_Formule){
        $this->id_Formule = $id_Formule;
      }
      public function getId_Formule(){
          return $this->id_Formule;
      }


      public function setId_Produit_Fabrique($id_Produit_Fabrique){
        $this->id_Produit_Fabrique = $id_Produit_Fabrique;
      }
      public function getId_Produit_Fabrique(){
          return $this->id_Produit_Fabrique;
      }

      public function setLait($lait){
        $this->lait = $lait;
      }
      public function getLait(){
          return $this->lait;
      }

      public function setSucre($sucre){
        $this->sucre = $sucre;
      }
      public function getSucre(){
          return $this->sucre;
      }

      public function setParfum($parfum){
        $this->parfum = $parfum;
      }
      public function getParfum(){
          return $this->parfum;
      }

      public function setConservateur($conservateur){
        $this->conservateur = $conservateur;
      }
      public function getConservateur(){
          return $this->conservateur;
      }

      public function setColorant($colorant){
        $this->colorant = $colorant;
      }
      public function getColorant(){
          return $this->colorant;
      }

      public function setFruit($fruit){
        $this->fruit = $fruit;
      }
      public function getFruit(){
          return $this->fruit;
      }

      


    public function get_id_Formule($id_Produit_Fabrique){
      $query = $this->db->query("select * from Formule where id_produit_fabrique = '". $id_Produit_Fabrique ."'");
      $view = array();
      foreach($query->result_array() as $row){
          $temp = new Formule();
          $temp->setId_Formule($row['id_formule']);
          $temp->setId_Produit_Fabrique($row['id_produit_fabrique']);
          $temp->setLait($row['lait']);
          $temp->setSucre($row['sucre']);
          $temp->setParfum($row['parfum']);
          $temp->setConservateur($row['conservateur']);
          $temp->setColorant($row['colorant']);
          $temp->setFruit($row['fruti']);
          $view[] = $temp;
      }
      return $view;
    }





}

?>


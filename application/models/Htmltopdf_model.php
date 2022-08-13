<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Htmltopdf_model extends CI_Model
{
  public function selectTypeVehicule()
  {
    //$liste=array();
    //$querie=$this->db->query("SELECT Vehicule.id as id,typeVehicule,marqueVehicule,numero FROM Vehicule JOIN TypeVehicule on Vehicule.idType=TypeVehicule.id JOIN MarqueVehicule on Vehicule.idMarque=MarqueVehicule.id where dispo=0");
    $this->db->select('Vehicule.id as id,typeVehicule,marqueVehicule,numero');
    $this->db->from('Vehicule');
    $this->db->join('TypeVehicule','Vehicule.idType=TypeVehicule.id');
    $this->db->join('MarqueVehicule','Vehicule.idMarque=MarqueVehicule.id');
    $this->db->where('dispo',0);
    //$liste=$querie->result_array();
    //return $liste;
    return $this->db->get();
  }

  public function trajetByIdV()
  {
    $id=$_POST['idVehicule'];
    $liste=array();
    $querie=$this->db->query("SELECT typeVehicule,marqueVehicule,numero,lieuDepart FROM Trajet join Vehicule ON Trajet.idVehicule=Vehicule.id JOIN TypeVehicule on Vehicule.idType=TypeVehicule.id JOIN MarqueVehicule on Vehicule.idMarque=MarqueVehicule.id where Vehicule.id=".$id);
    $liste=$querie->result_array();
    $rep='';
    for($i=0;$i<count($liste);$i++)
    {
      $rep .= '<p>vehicule:'.$liste[$i]["typeVehicule"].' de marque:'.$liste[$i]["marqueVehicule"].' avec numero:'.$liste[$i]["numero"].' à eu lieu de depart comme:'.$liste[$i]["lieuDepart"].'</p>';
    }
    return $rep;
  }
  
}
?>

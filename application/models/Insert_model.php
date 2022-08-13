<?php  
 class Insert_model extends CI_Model  
 {  
      
   /* function saverecords($data)
    {
          $this->db->insert('contenue',$data);
          return true;
    } */

    function __construct() {
        $this->tableName = 'protuit';
        $this->primaryKey = 'id';
    }
    
    public function insert($data = array()){
        $insert = $this->db->insert($this->tableName,$data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;    
        }
    }

    public function findProduitBYId($id){
        $this->db->select('*');
        $this->db->from('protuit');
        $this->db->where('id',$id);
        return $query = $this->db->get(); 
    }

    function rechercheById($id)  
      {  

        $this->db->select('*');
        $this->db->from('protuit');
        $this->db-> where ('id' ,$id); 
        return $query = $this->db->get();   
           
      }

    public function findAllDemande(){
        $this->db->select('*');
        $this->db->from('demandeRecharge');
        $this->db->where('valider',0);
        return $query = $this->db->get(); 
    } 

    public function findDemandeBYId($id){
        $this->db->select('*');
        $this->db->from('demandeRecharge');
        $this->db->where('id',$id);
        return $query = $this->db->get(); 
    }

    public function consulterSolde($idUser){
        $this->db->select('*');
        $this->db->from('portefeuille');
        $this->db->where('idUser',$idUser);
        return $query = $this->db->get(); 
    } 

    public function ValiderDemandeRecharge($id){
       $this->db->set('valider', 1);
       $this->db->where('id', $id);
        $this->db->update('demanderecharge');
    } 

    public function RechargerCompte($idUser,$montant){
       $this->db->set('argent', $montant);
       $this->db->where('idUser', $idUser);
        $this->db->update('portefeuille');
    } 

   public  function get_department_list($limit, $start)
    {
        $sql = 'select nom , prix , image  from protuit order by id limit ' . $start . ', ' . $limit;
        $query = $this->db->query($sql);
        return $query->result();
    }
  
  public function insertRecette($data)
  {          
       $this->db->insert('recette', $data);
  }

  public function getIdRecette()
  {
     $this->db->select_max('id');
        return $query = $this->db->get('recette');
  }
  public function insertDetailRecette($data)
  {          
       $this->db->insert('recette', $data);
  }

 }  
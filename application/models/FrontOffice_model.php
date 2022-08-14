<?php
class FrontOffice_model extends CI_Model{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    public function demandeRecharge($data){
        $this->db->insert('demandeRecharge', $data);
    }


    function findAllProduit()
    {
        $this->db->select('*');
        $this->db->from('protuit');
        return $query = $this->db->get();
    }
    function findAllCategorie()  
      {  

        $this->db->select('*');
        $this->db->from('categorie');
        return $query = $this->db->get();   
           
      }
       function ajoutPanier($idProduit,$qte,$idUser,$prixTotal,$idPayment)
      {
        $this->db->set('idProduit', $idProduit); 
        $this->db->set('qte', $qte); 
        $this->db->set('idUser', $idUser); 
        $this->db->set('prixTotal', $prixTotal); 
        $this->db->set('idPayment', $idPayment)-> get_Compiled_insert('panier'); 
      }
      function payment($data)
      {
       $this->db->insert('payment', $data);
      }

      function getIdPayment()
      {
        $this->db->select_max('id');
        return $query = $this->db->get('Payment');  
      }

      function debiterStock($qte,$id)
      {
            $this->db->set('qte', $qte);
            $this->db->where('id', $id);
            $this->db->update('protuit');
      }
      
      
public function debiterCompte($mantant , $idUser){
       $this->db->set('argent', $mantant);
       $this->db->where('idUser', $idUser);
        $this->db->update('portefeuille');
    } 
    function findProduitByCategorie($categorie)  
      {  

        $this->db->select('*');
        $this->db->from('protuit');
        $this->db->where('idCategorie', $categorie);
        return $query = $this->db->get();   
           
      }
    function recherche($motCle)  
      {  

        $this->db->select('*');
        $this->db->from('protuit');
        $this->db-> like ('nom' ,$motCle); 
        return $query = $this->db->get();   
           
      }
    function rechercheById($id)  
      {  

        $this->db->select('*');
        $this->db->from('protuit');
        $this->db-> where ('id' ,$id); 
        return $query = $this->db->get();   
           
      }

    function getPayment($idPayment)
    {
        $this->db->select('*');
        $this->db->from('payment');
        $this->db->where('id',$idPayment);
        return $query = $this->db->get();   
    }

      function rechercheAvancer($motCle,$prixMax,$categorie,$prixMin)  
      {  
        if($prixMax>0 AND $categorie>0 AND $prixMin>0 )
        {
            $this->db->select('*');
            $this->db->from('protuit');
            $this->db-> where ('prix <' ,$prixMax);
            $this->db-> where ('prix >' ,$prixMin);
            $this->db-> where ('categorie' ,$categorie);
            $this->db-> like ('nom' ,$motCle);
            return $query = $this->db->get();   
        }
        if($prixMax>0)
        {
            $this->db->select('*');
            $this->db->from('protuit');
            $this->db-> where ('prix <' ,$prixMax);
            $this->db-> like ('nom' ,$motCle);
            return $query = $this->db->get();   
        }
        if($prixMax>0)
        {
            $this->db->select('*');
            $this->db->from('protuit');
            $this->db-> where ('prix <' ,$prixMax);
            $this->db-> like ('nom' ,$motCle);
            return $query = $this->db->get();   
        }

         if( $categorie>0 AND $prixMin>0 )
        {
            $this->db->select('*');
            $this->db->from('protuit');
            $this->db-> where ('prix >' ,$prixMin);
            $this->db-> like ('nom' ,$motCle);
            return $query = $this->db->get(); 
        }
         if($prixMin>0 )
        {
            $this->db->select('*');
            $this->db->from('protuit');
            $this->db-> where ('categorie' ,$categorie);
            $this->db-> like ('nom' ,$motCle);
            return $query = $this->db->get(); 
        }
        if($motCle !="")
        {
            $this->db->select('*');
            $this->db->from('protuit');
            $this->db-> where ('nom' ,$motCle);
            return $query = $this->db->get();   
        }
      }

    function getRecette()
    {
        $this->db->select('*');
        $this->db->from('recette');
        return $query = $this->db->get();   
    }

    function findRecetteById($id)
    {
        $this->db->select('*');
        $this->db->from('recette');
        $this->db->where('id',$id);
        return $query = $this->db->get();   
    }

    function findNewProduit()
    {      
         //$this->db->select('*');
         return $query = $this->db->get('protuit' ,8, 0);
    }

    function getProduitPlusVendu()
    {
        $this->db->select('*');
        $this->db->order_by('vente', 'DESC');
        return $query = $this->db->get('protuit' ,6, 0);
    }
    function getProduitMieuxNote()
    {
        $this->db->select('*');
        $this->db->order_by('note', 'DESC');
        return $query = $this->db->get('protuit' ,6, 0);
    }
}
?>
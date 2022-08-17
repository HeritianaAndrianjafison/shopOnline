<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontOffice extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	public function __construct()
	{
	/*call CodeIgniter's default Constructor*/
	parent::__construct();
	
	/*load database libray manually*/
	$this->load->database();
	
	/*load Model*/
	$this->load->model('insert_model');
	$this->load->model('FrontOffice_model');
	}

	public function index($idProduit=1)
	{
			$response=$this->FrontOffice_model->findAllCategorie();
			$response2=$this->FrontOffice_model->findProduitByCategorie($idProduit);
			$response3=$this->FrontOffice_model->getRecette();
			$response4 =$this->FrontOffice_model->findNewProduit();
			$response5 =$this->FrontOffice_model->getProduitPlusVendu();
			$response6 =$this->FrontOffice_model->getProduitMieuxNote();

			//echo ($response5->result()[0]->image);
			//die();
			$this->load->view('front/index',array(
			'allCategorie' =>$response,
			'produitByCategorie' =>$response2,
			'AllRecette' =>$response3,
			'newProduit' =>$response4,
			'TopProduit' =>$response5,
			'produitMieuxNote' =>$response6,
		)); 
	}

	public function recherche()
	{
		if($this->input->post('ok'))
		{
			$mots=$this->input->post('mots');
			$resultat=$this->FrontOffice_model->recherche($mots);
			$this->load->view('frontOffice/recherche',array(
			'resultat' =>$resultat,
		)); 
		}
	}

	public function rechercheAvancer()
	{
		if($this->input->post('ok'))
		{
			$mots=$this->input->post('mots');
			$prixMax=$this->input->post('prixMax');
			$prixMin=$this->input->post('prixMin');
			$categorie=$this->input->post('categorie');
		/*	var_dump($categorie);
			var_dump($prixMax);
			var_dump($prixMin);
			var_dump($mots);*/


			$resultat=$this->FrontOffice_model->rechercheAvancer($mots,$prixMax,$categorie,$prixMin);
			$this->load->view('frontOffice/recherche',array(
			'resultat' =>$resultat,
		)); 
		}
	}

	public function fiche($id=0)
	{
		$resultat=$this->FrontOffice_model->rechercheById($id);
			$this->load->view('front/fiche',array(
			'resultat' =>$resultat,
			'idProduit'=>$id,
		));


	}

	public function creationPanier(){
	   if (!isset($_SESSION['panier'])){
	      $_SESSION['panier']=array();
	      $_SESSION['panier']['idProduit'] = array();
	      $_SESSION['panier']['qte'] = array();
	      $_SESSION['panier']['nomProduit'] = array();
	      $_SESSION['panier']['prixProduit'] = array();
	   }
	   return true;
	}	

	public function addPanier()
	{
		if($this->input->post('ok'))
		{
			if ($this->creationPanier())
		   {
		   	  $idProduit=$this->input->post('idProduit');
		   	  $produit=$this->FrontOffice_model->rechercheById($idProduit);
		   	  $nomProduit=$this->input->post('nomProduit');
		   	  $prixProduit=$this->input->post('prixProduit');
		   	  $qte=(int)$this->input->post('qte');

		   	  foreach ($produit->result() as $row)
              {
                   $nomProduit=$row->nom;
                   $prixProduit=$row->prix;            
              }

		      //Si le produit existe déjà on ajoute seulement la quantité
		      $positionProduit = array_search($idProduit,  $_SESSION['panier']['idProduit']);

		      if ($positionProduit !== false)
		      {
		         $_SESSION['panier']['qte'][$positionProduit] += (int)$qte ;
		         $_SESSION['panier']['prixProduit'][$positionProduit] *= (int)$qte ;
		      }
		      else
		      {
		         //Sinon on ajoute le produit
		         array_push( $_SESSION['panier']['idProduit'],$idProduit);
		         array_push( $_SESSION['panier']['qte'],$qte);
		         array_push( $_SESSION['panier']['prixProduit'],$prixProduit);
		         array_push( $_SESSION['panier']['nomProduit'],$nomProduit);
		      }
		   }
		   else {
			   echo "Un problème est survenu veuillez contacter l'administrateur du site.";
			}
			
			//var_dump($_SESSION['panier']);
			redirect(base_url() . 'frontOffice/index');
		}
		
	}

	public function addPanierMultiple()
	{
		
		if($this->input->post('ok'))
		{
			if ($this->creationPanier())
		   {
		   		$nomIngredient = $this->input->post('nomIngredient');
				$idIngredient =  $this->input->post('idIngredient');
				$qte =  $this->input->post('qte');
				$prixProduit=array();

		   	  // $idProduit=$this->input->post('idProduit');
		   	  // $produit=$this->FrontOffice_model->rechercheById($idProduit);
		   	  // $nomProduit=$this->input->post('nomProduit');
		   	  // $prixProduit=$this->input->post('prixProduit');
		   	  // $qte=(int)$this->input->post('qte');

		   	 for($i=0 ; $i< count($idIngredient); $i++)
		   	 {
		   	 	 $produit=$this->FrontOffice_model->rechercheById($idIngredient[$i]);
		   	 	 foreach ($produit->result() as $row)
	              {
	                  
	                   $prixProduit[$i]=$row->prix;            
	              }
		   	 }
		   	  
		     // Si le produit existe déjà on ajoute seulement la quantité
		   	 /*for($i=0 ; $i< count($idIngredient); $i++)
		   	 {
			   	 $positionProduit = array_search($idIngredient[$i],  $_SESSION['panier']['idProduit']);

			      if ($positionProduit !== false)
			      {
			         $_SESSION['panier']['qte'][$positionProduit] += (int)$qte[$i] ;
			         $_SESSION['panier']['prixProduit'][$positionProduit] *= (int)$qte[$i] ;
			      }
		   	 }*/
		      
		   	 $prixtt=0;
		         //Sinon on ajoute le produit
		   	 for($i=0 ; $i< count($idIngredient); $i++)
		   	 {
		   	 	$prixtt=$prixProduit[$i]*=$qte[$i];
		   	 	array_push( $_SESSION['panier']['idProduit'],$idIngredient[$i]);
		         array_push( $_SESSION['panier']['qte'],$qte[$i]);
		         array_push( $_SESSION['panier']['prixProduit'],$prixtt);
		         array_push( $_SESSION['panier']['nomProduit'],$nomIngredient[$i]);
		   	 }
		        
		   }
		   else {
			   echo "Un problème est survenu veuillez contacter l'administrateur du site.";
			}
			
			//var_dump($_SESSION['panier']);
			redirect(base_url() . 'frontOffice/index');
		}
		
	}

	
	public function getPanier()
	{
		$this->load->view('frontOffice/panier');
	}
	public function payment()
	{
		if($this->input->post('ok'))
		{
			$idUser=$this->session->userdata('iduser');
			//var_dump($this->session->userdata('iduser'));
			$solde=$this->insert_model->consulterSolde($idUser);
			$soldeCompte=0;
			$prixTotal=$this->input->post('prixTotal');

			$qteNew=Array();

          foreach ($solde->result() as $row)
              {
                   $soldeCompte = $row->argent;
              }

              if($soldeCompte >= $prixTotal)
              {
              	$MemberData = array(
		     	'idUser' => $idUser,
		        'prixTotal' =>$prixTotal,
		         );

			    $insertMemberData = $this->FrontOffice_model->payment($MemberData);
			    $idPayment=0;

			    $idPay=$this->FrontOffice_model->getIdPayment();
			    $prixTotalProduit=0;

			    foreach ($idPay->result() as $row)
	              {
	                   $idPayment = $row->id;
	              }

	             $totalApayer=$this->FrontOffice_model->getPayment($idPayment);
	               foreach ($totalApayer->result() as $row)
	              {
	                   $prixTotalProduit = $row->prixTotal;
	              }

	            for ($i=0; $i <count($_SESSION['panier']['idProduit']) ; $i++)
	            {
	            	   $this->FrontOffice_model->ajoutPanier
	            	(
	            	   	$_SESSION['panier']['idProduit'][$i] ,
	            		$_SESSION['panier']['qte'][$i] ,
	            		$idUser,
	            		$_SESSION['panier']['prixProduit'][$i],
	            		$idPayment,
	            	);
	            }


	           $newSoldeCompte=$soldeCompte-$prixTotalProduit;
	           $this->FrontOffice_model->debiterCompte($newSoldeCompte,$idUser);
	           
	           for($i=0 ; $i<count($_SESSION['panier']['idProduit']);$i++)
				{
					$this->FrontOffice_model->debiterStock($_SESSION['panier']['qte'][$i] , $_SESSION['panier']['idProduit'][$i]);
				}

	            //session_destroy()
	            unset($_SESSION["panier"]);
			    redirect(base_url() . 'FrontOffice/index');
			    //echo $newSoldeCompte;
              				
              }

		}
	}

	
	public function recharge()
	{
		if($this->input->post('ok'))
		{
			$idUser=$this->session->userdata('iduser');

			$data = array(
       				'argent' => $this->input->post('montant'),
	               'idUser' => $idUser,
        	);        
	            //Pass Member data to model
	        $insertMemberData = $this->FrontOffice_model->demandeRecharge($data);
	        redirect(base_url() . 'frontOffice/index');
		}

	}

	public function FicheRecette($idRecette)
	{
		 $recette=$this->FrontOffice_model->findRecetteById($idRecette);
		 $ingredient=array();
		 $ingredientList=array();
		 $qte=array();
		 $qte2=array();
		 $nomIngredient=array();
		 $idIngredient=array();

		foreach ($recette->result() as $row)
	    {
	          $ingredient=json_decode($row->ingredient);
	          $qte=json_decode($row->qte);
	          $qte2=json_decode($row->qte2);  
	    }
	   
	   for($i=0;$i<count($ingredient);$i++)
	   {
	   		$ingredientList[$i] = $this->insert_model->rechercheById($ingredient[$i]);
	   		foreach ($ingredientList[$i]->result() as $row)
		    {
		          $nomIngredient[$i]=$row->nom;
		          $idIngredient[$i]= $row->id;
		    }
	   }  

	   $this->load->view('frontOffice/ficheRecette',array(
			'nomIngredient' =>$nomIngredient,
			'idIngredient' =>$idIngredient,
			'qte' => $qte,
			'qte2' => $qte2,
		)); 
	}

}

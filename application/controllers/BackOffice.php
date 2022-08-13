<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BackOffice extends CI_Controller {

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
	public function index()
	{
		if($this->session->userdata('username') != "")
		{
			$test = "okokok";
			$resultat=$this->insert_model->findAllDemande();
			$allProduit=$this->FrontOffice_model->findAllProduit();
			$this->load->view('backOffice/back/profile',array(
			'resultat' =>$resultat,
			'allProduit'=>$allProduit,
			'test' => $test
		)); 
		}
		else{
			redirect(base_url() . 'LoginAdmin/login');
		}
		//echo "mety";
	}

	public function validerDemande($id=0)
	{
		$this->insert_model->ValiderDemandeRecharge($id);
		$montant=0;
		$idUser=$id;
		$solde=$this->insert_model->consulterSolde($idUser);
		$resultat=$this->insert_model->findDemandeBYId($id);
		$soldeCompte=0;

          foreach ($solde->result() as $row)
              {
                   $soldeCompte = $row->argent;
              }

		  foreach ($resultat->result() as $row)
              {
                   $montant=$row->argent;
                   $idUser=$row->idUser;
               }

       $soldeCompte=$soldeCompte+$montant;
        //var_dump($soldeCompte);
        $this->insert_model->RechargerCompte($idUser,$soldeCompte);
        redirect(base_url() . 'backOffice/');
	}

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

	function addRecette()
	{
		if($this->input->post('ok'))
		{
			$recette = $this->input->post('recette');
			$ingredient = $this->input->post('ingredient');
			$qte = $this->input->post('qte');
			$qte2 = $this->input->post('qte2');
			$prixProduit = [];
			$prixTot = 0;
			foreach($ingredient as $ingr){
				$produit[] = $this->insert_model->findProduitBYId((int)$ingr);
			}
			for($i=0 ; $i<count($produit) ; $i++)
			{
				foreach ($produit[$i]->result() as $row)
              {
                   $prixProduit[]=$row->prix;           
              }
			}
			for($j = 0; $j <= count($qte) - 1; $j++){
				$prixTot += (float)$qte[$j] * (float)$prixProduit[$j];
			}
			$data = [
				'recette' => $recette,
				'prix' => $prixTot,
				'ingredient' => json_encode($ingredient),
				'qte' => json_encode($qte),
				'qte2' => json_encode($qte2),
			];
			$this->insert_model->insertRecette($data);
			redirect(base_url() . 'BackOffice');
// optional
// echo "You chose the following color(s): <br>";

		}
	}

    function add()
    {
    	if($this->session->userdata('username') != "")
    	{

    		/*$response=$this->FrontOffice_model->findAllCategorie();
	    	$this->load->view('backOffice/back/profile',array(
			'allCategorie' =>$response
		));*/
	        if($this->input->post('ok'))
	        {
	            
	            //Check whether Member upload profile_img
	            if(!empty($_FILES['profile_img']['name']))
	            {
	                $config['upload_path'] = 'uploads/images/';
	                $config['allowed_types'] = 'jpg|jpeg|png|gif';
	                $config['file_name'] = $_FILES['profile_img']['name'];
	                
	                //Load upload library and initialize here configuration
	                $this->load->library('upload',$config);
	                $this->upload->initialize($config);
	                
	                if($this->upload->do_upload('profile_img'))
	                {
	                    $uploadData = $this->upload->data();
	                    $profile_img = $uploadData['file_name'];
	                }
	                else
	                {
	                    $profile_img = '';
	                }
	            }
	            else
	            {
	                $profile_img = '';
	            }
	            
	            //Prepare array of Member data
	            $MemberData = array(
	                'nom' => $this->input->post('nom'),
	                'prix' => $this->input->post('prix'),
	                'unite' => $this->input->post('unite'),
	                'idCategorie'=> $this->input->post('categorie'),
	                'qte'=> $this->input->post('qte'),
	                'image' => $profile_img

	            );	            
	            //Pass Member data to model
	            $insertMemberData = $this->insert_model->insert($MemberData);
	            
	            //Storing insertion status message.
	            if($insertMemberData){
	                $this->session->set_flashdata('success_msg', 'Member data have been added successfully.');
	            }
	            else
	            {
	                $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
	            }
	            redirect(base_url() . 'backOffice/');
	        }
    	}
    	else
		{
			redirect(base_url() . 'LoginAdmin/login');
		}
        
     }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HtmltoPDF extends CI_Controller
{
    public function index()
    {
        $sql=array();
        $this->load->library('Pagination_bootstrap');
        $links=array('next'=>'Next', 'prev'=>'Previous', 'last'=>'Last', 'first'=>'First');
        $this->pagination_bootstrap->set_links($links);
        $this->pagination_bootstrap->offset(1);
        //$sql=$this->db->get('Vehicule');
        //var_dump($sql);

        $this->load->model('Htmltopdf_model');
        //$data["listeV"] = $this->Htmltopdf_model->selectTypeVehicule();

        $sql=$this->Htmltopdf_model->selectTypeVehicule();
        //var_dump($sql);
        $data["results"]=$this->pagination_bootstrap->config("/HtmltoPDF/index",$sql);
        //var_dump($data["results"]);

        $this->load->view('backOffice/ListeVehicule.php',$data);
        
    }
    public function getpdf()
    {
        $test='test';
        $this->load->model('Htmltopdf_model');
        $this->load->library('pdf');
        $html_content= $this->Htmltopdf_model->trajetByIdV();
        $this->pdf->loadHtml($html_content);
        $this->pdf->render();
        $this->pdf->stream("".$test.".pdf",array("Attachment"=>0));
    }
}
?>
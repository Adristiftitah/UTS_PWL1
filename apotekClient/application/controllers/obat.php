<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat extends CI_Controller {

	/*var $api ="";
    function __construct() {
        parent::__construct();
        $this->api="http://localhost/apotekasek/api/obat";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }*/

	public function index()
	{
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'http://localhost/apotekasek1/api/obat');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
        $data['data_obat'] = json_decode($result, TRUE);
        curl_close($curl);

        
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard',$data);
		$this->load->view('templates/footer');
    }


}

/* End of file obat.php */
/* Location: ./application/controllers/obat.php */
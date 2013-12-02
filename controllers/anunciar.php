<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Anunciar extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
		parent::__construct();
		$data = array();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('path');
		$this->load->helper('directory');
		$this->load->library('upload');
        $this->load->library('image_lib');
        $this->load->library('moedas');
		$this->load->model('TB_Anunciante','anunciante');
		$this->load->model('TB_AnunciantePessoaFisica','anunciantePF');
		
		if($this->anunciante->logged()){
			$this->anunciante->define($this->session->userdata('id_login'));
			$this->anunciantePF->define($this->session->userdata('id_login'));
		}
	}

	public function index(){

	    $this->load->view('escolha_anuncio');

	}

	
	

	
	
	
	

	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
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

	}

	public function index(){
		$this->load->model('anunciante');
	    //$this->load->model('vehicle');
		//$this->data['array_vehicle_brand'] = $this->vehicle->vehicle_brand();

		//$this->load->library('encrypt');

		if($this->input->post('codigoPlano') !== false ){

			$password = md5($this->input->post('senha'));

			$arrayNovoCadastro = array(
				'TipoAnunciante' => $this->input->post('TipoAnunciante'),
				'Email' => $this->input->post('email'),
				'NomeAnunciante' => $this->input->post('nome'),
				'Password' => $password
			);

			$this->anunciante->adiciona($arrayNovoCadastro);

			redirect('login?email='.rawurlencode($this->input->post('email')).'&codigoPlano='.$this->input->post('codigoPlano'), 'refresh');

		}

	    $this->load->view('escolha_anuncio');

	}

	public function verificaEmail(){

		$this->load->model('anunciante');

		if($this->input->get('email')){
			$email = $this->input->get('email');
			header('Content-Type: application/x-json; charset=utf-8');
			echo json_encode($this->anunciante->verificaEmail($email));
		}
	}

	
	

	
	
	
	

	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

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
			redirect(base_url().'admin/', 'refresh');
		}else{
			//redirect(base_url().'login', 'refresh');
		}
	}

	function index() {


        if($this->input->post('email')){

        	if($this->anunciante->autentica_login($this->input->post('email'), $this->input->post('senha')) === true){
				$this->session->set_userdata('id_login', $this->anunciante->id);
				$this->session->set_userdata('logged', true);
				if($this->input->get('redirectURL')){
					redirect($this->input->get('redirectURL'), 'refresh');
				}else{
					redirect('admin/home', 'refresh');
				}
			}else{
				redirect('login?erro=403', 'refresh');
			}
        }
        $this->load->view('login');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
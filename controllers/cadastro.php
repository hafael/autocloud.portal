<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cadastro extends CI_Controller {

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

	public function index(){
		
		$data['erro_login']=false;

		if($this->input->post('loginEmail') || $this->input->post('loginSenha')){

        	if($this->anunciante->autentica_login($this->input->post('loginEmail'), $this->input->post('loginSenha')) === true){
				$this->session->set_userdata('id_login', $this->anunciante->id);
				$this->session->set_userdata('logged', true);
				if($this->input->get('redirectURL')){
					redirect($this->input->get('redirectURL'), 'refresh');
				}else{
					redirect('admin/home', 'refresh');
				}
			}else{
				$data['erro_login'] = true;
			}
        }
        if($this->input->post('email')){
        	
        	$array_tb_anunciante = array(
				'TipoAnunciante' => $this->input->post('TipoAnunciante'),
				'Email' => $this->input->post('email'),
				'Password' => md5($this->input->post('senha')),
				'TB_Estado_id' => $this->input->post('estado'),
				'TB_Estado_Nome' => $this->input->post('EstadoText'),
				'TB_Cidade_id' => $this->input->post('cidade'),
				'TB_Cidade_Nome' => $this->input->post('CidadeText')
			);

			$this->anunciante->adiciona($array_tb_anunciante);

			if($this->anunciante->TipoAnunciante==1){

				$array_tb_anunciantePF = array(
					'TB_Anunciante_id' => $this->anunciante->id,
					'NomeAnunciante' => $this->input->post('nome')
				);

				$this->anunciantePF->adiciona($array_tb_anunciantePF);

				if($this->anunciante->autentica_login($this->input->post('email'), $this->input->post('senha')) === true){
						
					$this->session->set_userdata('id_login', $this->anunciante->id);
					$this->session->set_userdata('logged', true);
					
					if($this->input->get('redirectURL')){
						redirect($this->input->get('redirectURL'), 'refresh');
					}else{
						redirect('admin/home', 'refresh');
					}
				};
			}

        }

	    $this->load->view('login-cadastro', $data);

	}

	

	
	

	
	
	
	

	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
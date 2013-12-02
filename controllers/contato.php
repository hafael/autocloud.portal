<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contato extends CI_Controller {

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

	function index(){

	    $this->load->view('contato');

	}
	public function enviar(){

		$email_cliente = $this->input->post('email');
		$nome_cliente = $this->input->post('nome');
		$assunto_cliente = $this->input->post('assunto');
		$mensagem_cliente = $this->input->post('mensagem');

	    $email_config = Array(
	        'protocol'  => 'smtp',
	        'smtp_host' => 'ssl://smtp.googlemail.com',
	        'smtp_port' => '465',
	        'smtp_user' => 'contato@autocloud.com.br',
	        'smtp_pass' => 'rafael655321',
	        'mailtype'  => 'html',
	        'starttls'  => true,
	        'newline'   => "\r\n"
	    );
	 
	    $this->load->library('email', $email_config);


	 	// Email para o cliente
	    $this->email->from('contato@autocloud.com.br', 'Contato Autocloud');
	    $this->email->reply_to('contato@autocloud.com.br', 'Contato Autocloud');
	    $this->email->to($email_cliente);
	    $this->email->subject('Resposta sobre contato');
	    $data_cliente = array( 'nome_cliente' => $nome_cliente);
	    $email= $this->load->view('email_template/resposta_contato', $data_cliente, TRUE);
	 
	    $this->email->message( $email );
	    $this->email->send();

	    // Email para o administrador
	    $this->email->clear(TRUE); //Limpa os objetos

	    $this->email->from($email_cliente, $nome_cliente);
	    $this->email->reply_to($email_cliente, $nome_cliente);
	    $this->email->to('contato@autocloud.com.br');
	    $this->email->subject('Contato do site ['.$assunto_cliente.']');
	    $data_admin = array('nome_cliente' => $nome_cliente,
	    			  'email_cliente' => $email_cliente, 
	    			  'assunto_cliente' => $assunto_cliente,
	    			  'mensagem_cliente' => $mensagem_cliente);
	    $email_admin = $this->load->view('email_template/resposta_admin', $data_admin, TRUE);
	 
	    $this->email->message( $email_admin );
	    $this->email->send();



	    redirect(base_url().'contato/enviado', 'refresh');

	}
	public function enviado(){

		$this->load->view('contato_enviado');

	}

	
	

	
	
	
	

	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
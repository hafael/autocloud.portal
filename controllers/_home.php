<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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

	var $store_id;

	public function __construct(){
		parent::__construct();
		$data = array();

	}

	public function index(){

	    /*
	    $this->load->model('store');
	    $this->load->model('home');
	    $this->load->model('pages');
	    $this->load->model('vehicle');
	    $this->load->model('announcement');
	    
	    $hostName = $this->input->server('HTTP_HOST');
		$host = explode(".", $this->input->server('HTTP_HOST'));

		if($host[0] == "www"){
			$host = $host[1];
		}else{
			$host = $host[0];
		}


	    if(!get_cookie('AC_autocloud_store_ID')){

	    	$store_id = $this->store->define_store($host, $hostName);

	    	$cookie = array(
               'name'   => 'autocloud_store_ID',
               'value'  => $store_id,
               'expire' => 0,
               'domain' => $this->input->server('HTTP_HOST'),
               'path'   => '/',
               'prefix' => 'AC_',
            );

            set_cookie($cookie);

	    }else{
	    	$store_id = get_cookie('AC_autocloud_store_ID');
	    }
	    $data['array_vehicle'] = array();
	    $this->data['store'] = $this->home->store_info($store_id);
	    $this->data['pages'] = $this->pages->return_pages($store_id);
	    $this->data['array_vehicle_brand'] = $this->vehicle->vehicle_brand();
	    $this->data['array_announcements'] = $this->announcement->get_last($store_id);


	    if($this->input->post("car_model") == true){
			//$this->data['array_vehicle_model'] = $this->vehicle->vehicle_model($this->input->post("car_model"));
		}
		*/
		$this->load->model('vehicle');
		$this->data['array_vehicle_brand'] = $this->vehicle->vehicle_brand();

	    $this->load->view('home', $this->data);

	}

	public function get_vehicle_brands(){
		$this->load->model('vehicle');

		header('Content-Type: application/x-json; charset=utf-8');

		echo json_encode($this->vehicle->vehicle_brand());
		

	}
	public function get_vehicle_models($car_company_id){
		$this->load->model('vehicle');

		header('Content-Type: application/x-json; charset=utf-8');

		echo json_encode($this->vehicle->vehicle_model($car_company_id));
		

	}
	public function get_vehicle_years($car_model_id){
		$this->load->model('vehicle');

		header('Content-Type: application/x-json; charset=utf-8');

		echo json_encode($this->vehicle->vehicle_years($car_model_id));
		

	}

	public function new_annoucement(){
		$this->load->model('announcement');

		$data = array(
		   'store_id' => $this->input->post('store_id'),
		   'car_company_id' => $this->input->post('car_company_id'),
		   'car_model_id' => $this->input->post('car_model_id'),
		   'car_year_fabrication_id' => $this->input->post('car_year_fabrication_id'),
		   'title' => $this->input->post('title')
		);


		if($this->announcement->create($data)){
			$response = array(
			   'status' => '200'
			);
		}

		header('Content-Type: application/x-json; charset=utf-8');
		echo json_encode($response);
	}
	

	
	
	
	

	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
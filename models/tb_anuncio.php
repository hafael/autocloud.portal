<?php 

	class TB_Anuncio extends CI_Model {

		

		/* Campos */
		var $id;
		var $TB_Anunciante_id;
		var $TipoVeiculo;
		var $TipoAnuncio;
		var $Titulo;
		var $Descricao;
		var $ValorVenda;
		var $TelContato;
		var $Status;
		var $Deletado;

		var $nome_tabela;
		var $data_base_object;
		var $config_database;
		var $array_objetos;

		function TB_Anuncio($config_database = "autocloudv2"){
	    	
	        parent::__construct();

	        
	        $this->nome_tabela = "TB_Anuncio";
	        $this->data_base_object = null;
	        $this->config_database = $config_database;
	        
	        
	    }

	    function define($id, $retornaObjetoDeDados = false){

	    	if(is_array($id)){
				
				$this->id = $id['id'];
				$this->TB_Anunciante_id = $id['TB_Anunciante_id'];
				$this->TipoVeiculo = $id['TipoVeiculo'];
				$this->TipoAnuncio = $id['TipoAnuncio'];
				$this->Titulo = $id['Titulo'];
				$this->Descricao = $id['Descricao'];
				$this->ValorVenda = $id['ValorVenda'];
				$this->TelContato = $id['TelContato'];
				$this->Status = $id['Status'];
				$this->Deletado = $id['Deletado'];
								
				return true;
				
			}else if(is_object($id)){
				
				$this->id = $id->id;
				$this->TB_Anunciante_id = $id->TB_Anunciante_id;
				$this->TipoVeiculo = $id->TipoVeiculo;
				$this->TipoAnuncio = $id->TipoAnuncio;
				$this->Titulo = $id->Titulo;
				$this->Descricao = $id->Descricao;
				$this->ValorVenda = $id->ValorVenda;
				$this->TelContato = $id->TelContato;
				$this->Status = $id->Status;
				$this->Deletado = $id->Deletado;
							
				return true;

			}else{
				
				//load database
				$this->data_base_object = $this->load->database($this->config_database,true);
				
				//cria consultas
				$query = $this->data_base_object->get_where($this->nome_tabela, array('id' => $id));
				
				foreach ($query->result() as $row){
				    
					if($retornaObjetoDeDados === true){
						
						return $row;
						
					}else{
					
						$this->id = $row->id;
					    $this->TB_Anunciante_id = $row->TB_Anunciante_id;
					    $this->TipoVeiculo = $row->TipoVeiculo;
					    $this->TipoAnuncio = $row->TipoAnuncio;
					    $this->Titulo = $row->Titulo;
					    $this->Descricao = $row->Descricao;
					    $this->ValorVenda = $row->ValorVenda;
					    $this->TelContato = $row->TelContato;
					    $this->Status = $row->Status;
					    $this->Deletado = $row->Deletado;
				    
					}
				}
						
				return true;
			}

			return false;

	    }

	    function busca($array_busca) {
	        //load database
			$this->data_base_object = $this->load->database($this->config_database,true);

			//cria consulta

			
			if($array_busca['fabricante']!=''){
				$this->data_base_object->where('TB_FabricanteVeiculo_id = ', $array_busca['fabricante']);
			}
			if($array_busca['modelo']!=''){
				$this->data_base_object->where('TB_ModeloVeiculo_TB_FabricanteVeiculo_id = ', $array_busca['modelo']);
			}
			if($array_busca['anoDe']!=''){
				$this->data_base_object->where('AnoFab >= ', $array_busca['anoDe']);
			}
			if($array_busca['anoAte']!=''){
				$this->data_base_object->where('AnoFab <= ', $array_busca['anoAte']);
			}
			if($array_busca['estado']!=''){
				$this->data_base_object->where('TB_Estado_id = ', $array_busca['estado']);
			}
			if($array_busca['cidade']!=''){
				$this->data_base_object->where('TB_Cidade_id = ', $array_busca['cidade']);
			}

			if($array_busca['tipo_veiculo']==1){
				$this->data_base_object->join('TB_AnuncioCarro', 'TB_AnuncioCarro.TB_Anuncio_id = TB_Anuncio.id');
			}
			if($array_busca['tipo_veiculo']==2){
				$this->data_base_object->join('TB_AnuncioMoto', 'TB_AnuncioMoto.TB_Anuncio_id = TB_Anuncio.id');
			}
			//$this->data_base_object->join('TB_Anunciante', 'TB_Anunciante.id = TB_Anuncio.TB_Anunciante_id');
			
			$this->data_base_object->where('Status = ', true);
			$this->data_base_object->where('Deletado = ', false);
			
			//$this->data_base_object->select('*');
			//$this->data_base_object->from('TB_Anuncio');
			//$this->data_base_object->join('TB_ImagensAnuncio', 'TB_ImagensAnuncio.TB_Anuncio_id = TB_Anuncio.id');

			//executa query
			$query = $this->data_base_object->get_where($this->nome_tabela);
			//$query = $this->data_base_object->get();

			foreach ($query->result() as $row){
				$array_objetos[] = $row;
			}
			return $array_objetos;
	    }

	    function lista($id_anunciante) {
	        //load database
			$this->data_base_object = $this->load->database($this->config_database,true);

			//cria consulta
			$this->data_base_object->where('TB_Anunciante_id = ', $id_anunciante);
			$this->data_base_object->where('Deletado = ', false);
			$this->data_base_object->order_by('id', 'desc'); 
			
			//$this->data_base_object->select('*');
			//$this->data_base_object->from('TB_Anuncio');
			//$this->data_base_object->join('TB_ImagensAnuncio', 'TB_ImagensAnuncio.TB_Anuncio_id = TB_Anuncio.id');

			//executa query
			$query = $this->data_base_object->get_where($this->nome_tabela);
			//$query = $this->data_base_object->get();

			foreach ($query->result() as $row){
				$array_objetos[] = $row;
			}
			return $array_objetos;
	    }
	    

	    function adiciona($array_dados){
    		//load database
			$this->data_base_object = $this->load->database($this->config_database,true);
			
			//cria consulta
			$this->data_base_object->insert($this->nome_tabela, $array_dados);
			
			//Define o objeto com o last id do banco	
			$this->define((int)$this->data_base_object->insert_id());
			
			return (int)$this->data_base_object->insert_id();
	
	    }

	    function edita($id_anuncio, $array_dados){
    		//load database
			$this->data_base_object = $this->load->database($this->config_database,true);
			
			//cria consulta
			$this->data_base_object->where('id', (int)$id_anuncio);
			$this->data_base_object->update($this->nome_tabela, $array_dados);

			//$this->data_base_object->update($this->nome_tabela, $array_dados);
			
			//Define o objeto com o last id do banco	
			$this->define((int)$id_anuncio);
			
			return (int)$id_anuncio;
	
	    }

	    function ativa($id_anuncio){
    		//load database
			$this->data_base_object = $this->load->database($this->config_database,true);
			
			//cria consulta
			$this->data_base_object->where('id', (int)$id_anuncio);
			$this->data_base_object->update($this->nome_tabela, array('Status' => true));
	
			$this->define((int)$id_anuncio);
			
			return true;
	
	    }
	    function desativa($id_anuncio){
    		//load database
			$this->data_base_object = $this->load->database($this->config_database,true);
			
			//cria consulta
			$this->data_base_object->where('id', (int)$id_anuncio);
			$this->data_base_object->update($this->nome_tabela, array('Status' => false));
	
			$this->define((int)$id_anuncio);
			
			return true;
	
	    }
	    function remove($id_anuncio){
    		//load database
			$this->data_base_object = $this->load->database($this->config_database,true);
			
			//cria consulta
			$this->data_base_object->where('id', (int)$id_anuncio);
			$this->data_base_object->update($this->nome_tabela, array('Deletado' => true));
	
			$this->define((int)$id_anuncio);
			
			return true;
	
	    }
		

	}

?>
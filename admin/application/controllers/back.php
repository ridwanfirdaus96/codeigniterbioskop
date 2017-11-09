<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class controllerAuthorized extends CI_Controller {

 function __construct()
    {
        parent::__construct();
 
        /* Standard Libraries of codeigniter are required */
        $this->load->database();
        $this->load->helper('url');
        /* ------------------ */ 
 
        $this->load->library('grocery_CRUD');
 
    }
	
	
	/*==============================================================================================================*/
		
	 public function index(){
	   if($this->session->userdata('logged_in')) {
	     $session_data = $this->session->userdata('logged_in');
		 	/*$data['username'] = $session_data['username'];
		     $this->load->view('viewAuthorized', $data);*/
			
			/* ## Filter user menggunakan username */
			if($session_data['username']=='admin'){

		 	$crud = new grocery_CRUD();
			/*$crud->set_theme('datatables');*/
			$crud->set_table('tbl_jenis_brg');
			$crud->set_subject('Data Kode Barang');
			$crud->columns('kode_brg','desk_kode_brg');
				 			
				//DATA PENAMAAN ALIAS TABLE
		   	$crud->display_as('kode_brg','Kode Barang');
			$crud->display_as('desk_kode_brg','Deskripsi Barang');
								 
			$crud->fields('kode_brg','desk_kode_brg');	 
			$crud->required_fields('kode_brg','desk_kode_brg');
				 
		    $output = $crud->render();
		    $this->groceryOutput($output); 
			}//End if filter user
			else{
				//Jika bukan user admin
	     		redirect('controllerAuthorized/tabel_operator', 'refresh');
			}
	   }
	   else{
	     //If no session, redirect to login page
	     redirect('controllerLogin', 'refresh');
	   }
	 }
	
	
	
	public function tabel_operator(){
		if($this->session->userdata('logged_in')){
	     	$session_data = $this->session->userdata('logged_in');
			
			/* ## Filter user menggunakan username */
			if($session_data['username']=='admin'){
			
		        $crud = new grocery_CRUD();
		    	$crud->set_table('tbl_operator');
				$crud->set_subject('Tambahkan Data');
				$crud->unset_columns('id_operator');
					 
				$crud->display_as('kode_brg_ids','Kode Barang')
					 ->display_as('id_param1','Parameter-1')
					 ->display_as('id_param2','Parameter-2')
					 ->display_as('id_param3','Parameter-3')
					 ->display_as('id_param4','Parameter-4');
					 
				$crud->set_relation('kode_brg_ids','tbl_jenis_brg','{kode_brg} -- {desk_kode_brg}')
					 ->set_relation('desk_kode_brg','tbl_jenis_brg','desk_kode_brg')	
						->set_relation('id_param1','tbl_param1','param1')
						->set_relation('desk_p1','tbl_param1','desk_p1')
							 ->set_relation('id_param2','tbl_param2','param2')
							 ->set_relation('desk_p2','tbl_param2','desk_p2')	
								 ->set_relation('id_param3','tbl_param3','param3')
								 ->set_relation('desk_p3','tbl_param3','desk_p3')					
									 ->set_relation('id_param4','tbl_param4','param4')
									 ->set_relation('desk_p4','tbl_param4','desk_p4');
					 
				$crud->fields('kode_brg_ids','desk_kode_brg','id_param1','desk_p1','id_param2','desk_p2','id_param3','desk_p3',
								'id_param4','desk_p4','item_number','user_comment','desk_item_number');
					 
				$crud->field_type('item_number', 'hidden', '');
				$crud->required_fields('id_kode_brg');
					 
				$crud->callback_column('item_number',array($this,'limitColor20'));
					 
				$crud->callback_edit_field('item_number',array($this,'set_item_number_to_empty'));
				$crud->callback_before_insert(array($this,'createItemNumber'));
				 $crud->callback_before_update(array($this,'createItemNumber'));
					 
				$crud->callback_add_field('id_param1', array($this, 'empty_param1_dropdown_select'));
				$crud->callback_edit_field('id_param1', array($this, 'empty_param1_dropdown_select'));
					$crud->callback_add_field('id_param2', array($this, 'empty_param2_dropdown_select'));
					$crud->callback_edit_field('id_param2', array($this, 'empty_param2_dropdown_select'));
						$crud->callback_add_field('id_param3', array($this, 'empty_param3_dropdown_select'));
						$crud->callback_edit_field('id_param3', array($this, 'empty_param3_dropdown_select'));
							$crud->callback_add_field('id_param4', array($this, 'empty_param4_dropdown_select'));
							$crud->callback_edit_field('id_param4', array($this, 'empty_param4_dropdown_select'));
							
				$crud->callback_add_field('desk_p1', array($this, 'empty_desk_p1_dropdown_select'));
				$crud->callback_edit_field('desk_p1', array($this, 'empty_desk_p1_dropdown_select'));
					$crud->callback_add_field('desk_p2', array($this, 'empty_desk_p2_dropdown_select'));
					$crud->callback_edit_field('desk_p2', array($this, 'empty_desk_p2_dropdown_select'));
						$crud->callback_add_field('desk_p3', array($this, 'empty_desk_p3_dropdown_select'));
						$crud->callback_edit_field('desk_p3', array($this, 'empty_desk_p3_dropdown_select'));
							$crud->callback_add_field('desk_p4', array($this, 'empty_desk_p4_dropdown_select'));
							$crud->callback_edit_field('desk_p4', array($this, 'empty_desk_p4_dropdown_select'));
		 
		 
		    	$output = $crud->render();
				
				//DEPENDENT DROPDOWN SETUP
				$dd_data = array(
					//GET THE STATE OF THE CURRENT PAGE - E.G LIST | ADD
					'dd_state' =>  $crud->getState(),
					//SETUP YOUR DROPDOWNS
					//Parent field item always listed first in array, in this case countryID
					//Child field items need to follow in order, e.g stateID then cityID
					'dd_dropdowns' => array('kode_brg_ids','id_param1','desk_p1','id_param2','desk_p2',
											'id_param3','desk_p3','id_param4','desk_p4'),
					//SETUP URL POST FOR EACH CHILD
					//List in order as per above
					'dd_url' => array('', site_url().'/controllerAuthorized/get_param1/', 
										site_url().'/controllerAuthorized/get_desk_p1/', 
										site_url().'/controllerAuthorized/get_param2/', 
										site_url().'/controllerAuthorized/get_desk_p2/', 
										site_url().'/controllerAuthorized/get_param3/', 										
										site_url().'/controllerAuthorized/get_desk_p3/',
										site_url().'/controllerAuthorized/get_param4/',  
										site_url().'/controllerAuthorized/get_desk_p4/'),
					//LOADER THAT GETS DISPLAYED NEXT TO THE PARENT DROPDOWN WHILE THE CHILD LOADS
					'dd_ajax_loader' => base_url().'ajax-loader.gif'
				);
				$output->dropdown_setup = $dd_data;
			
		    	$this->groceryOutput($output);
			}//End if filter user
			else{
				//Jika bukan user admin
	     		redirect('controllerAuthorized/tabel_operator', 'refresh');
			}  
		}
	   	else{
	     //If no session, redirect to login page
	     redirect('controllerLogin', 'refresh');
	   	}
	}
	
	
	
	
	
	public function tabel_param1(){
		if($this->session->userdata('logged_in')){
	     	$session_data = $this->session->userdata('logged_in');
			
			/* ## Filter user menggunakan username */
			if($session_data['username']=='admin'){
			
		        $crud = new grocery_CRUD();
		    	$crud->set_table('tbl_param1');
				$crud->set_subject('Tambahkan Data');
		    	$crud->columns('kode_brg_ids','param1','desk_p1');
					 
				$crud->display_as('kode_brg_ids','Kode Barang')
					 ->display_as('param1','Parameter-1')
					 ->display_as('desk_p1','Deskripsi');
					 
				$crud->set_relation('kode_brg_ids','tbl_jenis_brg','{kode_brg} - {desk_kode_brg}');
					 
				$crud->fields('kode_brg_ids','param1','desk_p1');
				$crud->required_fields('kode_brg_ids','param1','desk_p1');
		 
		    	$output = $crud->render();
		    	$this->groceryOutput($output);
			}//End if filter user
			else{
				//Jika bukan user admin
	     		redirect('controllerAuthorized/tabel_operator', 'refresh');
			}  
		}
	   	else{
	     //If no session, redirect to login page
	     redirect('controllerLogin', 'refresh');
	   	}
	}
	
	public function tabel_param2(){
		if($this->session->userdata('logged_in')){
	     	$session_data = $this->session->userdata('logged_in');
			
			/* ## Filter user menggunakan username */
			if($session_data['username']=='admin'){
			
		        $crud = new grocery_CRUD();
		    	$crud->set_table('tbl_param2')
					 ->set_subject('Tambahkan Data')
		    		 ->columns('kode_brg_ids','param2','desk_p2')
					 
					 ->display_as('kode_brg_ids','Kode Barang')
					 ->display_as('param2','Parameter-2')
					 ->display_as('desk_p2','Deskripsi')
					 
					 ->set_relation('kode_brg_ids','tbl_jenis_brg','{kode_brg} - {desk_kode_brg}')
					 
					 ->fields('kode_brg_ids','param2','desk_p2')
					 ->required_fields('kode_brg_ids','param2','desk_p2');
		 
		    	$output = $crud->render();
		    	$this->groceryOutput($output);
			}//End if filter user
			else{
				//Jika bukan user admin
	     		redirect('controllerAuthorized/tabel_operator', 'refresh');
			}  
		}
	   	else{
	     //If no session, redirect to login page
	     redirect('controllerLogin', 'refresh');
	   	}
	}
	
	public function tabel_param3(){
		if($this->session->userdata('logged_in')){
	     	$session_data = $this->session->userdata('logged_in');
			
			/* ## Filter user menggunakan username */
			if($session_data['username']=='admin'){
			
		        $crud = new grocery_CRUD();
		    	$crud->set_table('tbl_param3')
					 ->set_subject('Tambahkan Data')
		    		 ->columns('kode_brg_ids','param3','desk_p3')
					 
					 ->display_as('kode_brg_ids','Kode Barang')
					 ->display_as('param3','Parameter-3')
					 ->display_as('desk_p3','Deskripsi')
					 
					 ->set_relation('kode_brg_ids','tbl_jenis_brg','{kode_brg} - {desk_kode_brg}')
					 
					 ->fields('kode_brg_ids','param3','desk_p3')
					 ->required_fields('kode_brg_ids','param3','desk_p3');
		 
		    	$output = $crud->render();
		    	$this->groceryOutput($output);
			}//End if filter user
			else{
				//Jika bukan user admin
	     		redirect('controllerAuthorized/tabel_operator', 'refresh');
			}  
		}
	   	else{
	     //If no session, redirect to login page
	     redirect('controllerLogin', 'refresh');
	   	}
	}
	
	public function tabel_param4(){
		if($this->session->userdata('logged_in')){
	     	$session_data = $this->session->userdata('logged_in');
			
			/* ## Filter user menggunakan username */
			if($session_data['username']=='admin'){
			
		        $crud = new grocery_CRUD();
		    	$crud->set_table('tbl_param4')
					 ->set_subject('Tambahkan Data')
		    		 ->columns('kode_brg_ids','param4','desk_p4')
					 
					 ->display_as('kode_brg_ids','Kode Barang')
					 ->display_as('param4','Parameter-4')
					 ->display_as('desk_p4','Deskripsi')
					 
					 ->set_relation('kode_brg_ids','tbl_jenis_brg','{kode_brg} - {desk_kode_brg}')
					 
					 ->fields('kode_brg_ids','param4','desk_p4')
					 ->required_fields('kode_brg_ids','param4','desk_p4');
		 
		    	$output = $crud->render();
		    	$this->groceryOutput($output);
			}//End if filter user
			else{
				//Jika bukan user admin
	     		redirect('controllerAuthorized/tabel_operator', 'refresh');
			}  
		}
	   	else{
	     //If no session, redirect to login page
	     redirect('controllerLogin', 'refresh');
	   	}
	}
	
	
	
	/* ## Fungsi untuk generate item number dan deskripsi */
	function createItemNumber($post_array){
			$kode_brg = $_POST['id_kode_brg'];
			$param1 = $_POST['id_param1'];
			$param2 = $_POST['id_param2'];
			$param3 = $_POST['id_param3'];
			$param4 = $_POST['id_param4'];
			
	    if(empty($post_array['item_number'])){
	        $post_array['item_number'] = $kode_brg.'-'.$param1.''.$param2.''.$param3.''.$param4;
	    }
	    return $post_array;
	}
	
	/* ## Fungsi untuk mengosongkan data pada field --> item_number dan desk_item_number */
	function set_item_number_to_empty() {
	    return "<input type='hidden' name='item_number' value='' />";
	}
	
	/* ## Fungsi untuk merubah warna ketika jumlah karakter tidak sesuai */
	function limitColor20($value, $row){
		$jumStr=strlen($value);
			if($jumStr<=20){
				$hasil = $value;
			}
			else{
				$kalimat1 = substr($value,0,20);
				$selisih = $jumStr-20;
				$kalimat2 = substr($value,20,$selisih);
				$hasil = '<b>'.$kalimat1.'</b><span style="color:red">'.$kalimat2.'</span>';
			}
		return $hasil/*'<span style="color:red">'.$hasil.'<span>'*/;
	}
	
	
	
	//GET JSON OF PARAM1 --------------------------------------------------------------
	function get_param1()
	{
		$kode_brg_ids = $this->uri->segment(3);
		
		$this->db->select("*")
				 ->from('tbl_param1')
				 ->where('kode_brg_ids', $kode_brg_ids);
		$db = $this->db->get();
		
		$array = array();
		foreach($db->result() as $row):
			$array[] = array("value" => $row->param1_id, "property" => $row->param1);
		endforeach;
		
		echo json_encode($array);
		exit;
	}
				function get_desk_p1()
				{
					$kode_brg_ids = $this->uri->segment(3);
					
					$this->db->select("*")
							 ->from('tbl_param1')
							 ->where('kode_brg_ids', $kode_brg_ids);
					$db = $this->db->get();
					
					$array = array();
					foreach($db->result() as $row):
						$array[] = array("value" => $row->param1_id, "property" => $row->desk_p1);
					endforeach;
					
					echo json_encode($array);
					exit;
				}
				
				
	function get_param2()
	{
		$kode_brg_ids = $this->uri->segment(3);
		
		$this->db->select("*")
				 ->from('tbl_param2')
				 ->where('kode_brg_ids', $kode_brg_ids);
		$db = $this->db->get();
		
		$array = array();
		foreach($db->result() as $row):
			$array[] = array("value" => $row->param2_id, "property" => $row->param2);
		endforeach;
		
		echo json_encode($array);
		exit;
	}
				function get_desk_p2()
				{
					$kode_brg_ids = $this->uri->segment(3);
					
					$this->db->select("*")
							 ->from('tbl_param2')
							 ->where('kode_brg_ids', $kode_brg_ids);
					$db = $this->db->get();
					
					$array = array();
					foreach($db->result() as $row):
						$array[] = array("value" => $row->param2_id, "property" => $row->desk_p2);
					endforeach;
					
					echo json_encode($array);
					exit;
				}
				

	function get_param3()
	{
		$kode_brg_ids = $this->uri->segment(3);
		
		$this->db->select("*")
				 ->from('tbl_param3')
				 ->where('kode_brg_ids', $kode_brg_ids);
		$db = $this->db->get();
		
		$array = array();
		foreach($db->result() as $row):
			$array[] = array("value" => $row->param3_id, "property" => $row->param3);
		endforeach;
		
		echo json_encode($array);
		exit;
	}
				function get_desk_p3()
				{
					$kode_brg_ids = $this->uri->segment(3);
					
					$this->db->select("*")
							 ->from('tbl_param3')
							 ->where('kode_brg_ids', $kode_brg_ids);
					$db = $this->db->get();
					
					$array = array();
					foreach($db->result() as $row):
						$array[] = array("value" => $row->param3_id, "property" => $row->desk_p3);
					endforeach;
					
					echo json_encode($array);
					exit;
				}
				
			
	function get_param4()
	{
		$kode_brg_ids = $this->uri->segment(3);
		
		$this->db->select("*")
				 ->from('tbl_param4')
				 ->where('kode_brg_ids', $kode_brg_ids);
		$db = $this->db->get();
		
		$array = array();
		foreach($db->result() as $row):
			$array[] = array("value" => $row->param4_id, "property" => $row->param4);
		endforeach;
		
		echo json_encode($array);
		exit;
	}
				function get_desk_p4()
				{
					$kode_brg_ids = $this->uri->segment(3);
					
					$this->db->select("*")
							 ->from('tbl_param4')
							 ->where('kode_brg_ids', $kode_brg_ids);
					$db = $this->db->get();
					
					$array = array();
					foreach($db->result() as $row):
						$array[] = array("value" => $row->param4_id, "property" => $row->desk_p4);
					endforeach;
					
					echo json_encode($array);
					exit;
				}
				
		

	//CALLBACK FUNCTIONS PARAMETER --------------------------------------------------------------
	function empty_param1_dropdown_select()
	{
		//CREATE THE EMPTY SELECT STRING
		$empty_select = '<select name="id_param1" class="chosen-select" data-placeholder="Select Param1" style="width: 300px; display: none;">';
		$empty_select_closed = '</select>';
		//GET THE ID OF THE LISTING USING URI
		$listingID = $this->uri->segment(4);
		
		//LOAD GCRUD AND GET THE STATE
		$crud = new grocery_CRUD();
		$param1 = $crud->getState();
		
		//CHECK FOR A URI VALUE AND MAKE SURE ITS ON THE EDIT STATE
		if(isset($listingID) && $param1 == "edit") {
			//GET THE STORED STATE ID
			$this->db->select('kode_brg_ids, id_param1')
					 ->from('tbl_operator')
					 ->where('id_operator', $listingID);
			$db = $this->db->get();
			$row = $db->row(0);
			$kode_brg_ids = $row->kode_brg_ids;
			$id_param1 = $row->id_param1;
			
			//GET THE STATES PER COUNTRY ID
			$this->db->select('*')
					 ->from('tbl_param1')
					 ->where('kode_brg_ids', $kode_brg_ids);
			$db = $this->db->get();
			
			//APPEND THE OPTION FIELDS WITH VALUES FROM THE STATES PER THE COUNTRY ID
			foreach($db->result() as $row):
				if($row->param1_id == $id_param1) {
					$empty_select .= '<option value="'.$row->param1_id.'" selected="selected">'.$row->param1.'</option>';
				} else {
					$empty_select .= '<option value="'.$row->param1_id.'">'.$row->param1.'</option>';
				}
			endforeach;
			
			//RETURN SELECTION COMBO
			return $empty_select.$empty_select_closed;
		} else {
			//RETURN SELECTION COMBO
			return $empty_select.$empty_select_closed;	
		}
	}
	
	function empty_param2_dropdown_select()
	{
		//CREATE THE EMPTY SELECT STRING
		$empty_select = '<select name="id_param2" class="chosen-select" data-placeholder="Select Param2" style="width: 300px; display: none;">';
		$empty_select_closed = '</select>';
		//GET THE ID OF THE LISTING USING URI
		$listingID = $this->uri->segment(4);
		
		//LOAD GCRUD AND GET THE STATE
		$crud = new grocery_CRUD();
		$param2 = $crud->getState();
		
		//CHECK FOR A URI VALUE AND MAKE SURE ITS ON THE EDIT STATE
		if(isset($listingID) && $param2 == "edit") {
			//GET THE STORED STATE ID
			$this->db->select('kode_brg_ids, id_param2')
					 ->from('tbl_operator')
					 ->where('id_operator', $listingID);
			$db = $this->db->get();
			$row = $db->row(0);
			$kode_brg_ids = $row->kode_brg_ids;
			$id_param2 = $row->id_param2;
			
			//GET THE STATES PER COUNTRY ID
			$this->db->select('*')
					 ->from('tbl_param2')
					 ->where('kode_brg_ids', $kode_brg_ids);
			$db = $this->db->get();
			
			//APPEND THE OPTION FIELDS WITH VALUES FROM THE STATES PER THE COUNTRY ID
			foreach($db->result() as $row):
				if($row->param2_id == $id_param2) {
					$empty_select .= '<option value="'.$row->param2_id.'" selected="selected">'.$row->param2.'</option>';
				} else {
					$empty_select .= '<option value="'.$row->param2_id.'">'.$row->param2.'</option>';
				}
			endforeach;
			
			//RETURN SELECTION COMBO
			return $empty_select.$empty_select_closed;
		} else {
			//RETURN SELECTION COMBO
			return $empty_select.$empty_select_closed;	
		}
	}
	
	function empty_param3_dropdown_select()
	{
		//CREATE THE EMPTY SELECT STRING
		$empty_select = '<select name="id_param3" class="chosen-select" data-placeholder="Select Param1" style="width: 300px; display: none;">';
		$empty_select_closed = '</select>';
		//GET THE ID OF THE LISTING USING URI
		$listingID = $this->uri->segment(4);
		
		//LOAD GCRUD AND GET THE STATE
		$crud = new grocery_CRUD();
		$param3 = $crud->getState();
		
		//CHECK FOR A URI VALUE AND MAKE SURE ITS ON THE EDIT STATE
		if(isset($listingID) && $param3 == "edit") {
			//GET THE STORED STATE ID
			$this->db->select('kode_brg_ids, id_param3')
					 ->from('tbl_operator')
					 ->where('id_operator', $listingID);
			$db = $this->db->get();
			$row = $db->row(0);
			$kode_brg_ids = $row->kode_brg_ids;
			$id_param3 = $row->id_param3;
			
			//GET THE STATES PER COUNTRY ID
			$this->db->select('*')
					 ->from('tbl_param3')
					 ->where('kode_brg_ids', $kode_brg_ids);
			$db = $this->db->get();
			
			//APPEND THE OPTION FIELDS WITH VALUES FROM THE STATES PER THE COUNTRY ID
			foreach($db->result() as $row):
				if($row->param3_id == $id_param3) {
					$empty_select .= '<option value="'.$row->param3_id.'" selected="selected">'.$row->param3.'</option>';
				} else {
					$empty_select .= '<option value="'.$row->param3_id.'">'.$row->param3.'</option>';
				}
			endforeach;
			
			//RETURN SELECTION COMBO
			return $empty_select.$empty_select_closed;
		} else {
			//RETURN SELECTION COMBO
			return $empty_select.$empty_select_closed;	
		}
	}
	
	function empty_param4_dropdown_select()
	{
		//CREATE THE EMPTY SELECT STRING
		$empty_select = '<select name="id_param4" class="chosen-select" data-placeholder="Select Param1" style="width: 300px; display: none;">';
		$empty_select_closed = '</select>';
		//GET THE ID OF THE LISTING USING URI
		$listingID = $this->uri->segment(4);
		
		//LOAD GCRUD AND GET THE STATE
		$crud = new grocery_CRUD();
		$param4 = $crud->getState();
		
		//CHECK FOR A URI VALUE AND MAKE SURE ITS ON THE EDIT STATE
		if(isset($listingID) && $param4 == "edit") {
			//GET THE STORED STATE ID
			$this->db->select('kode_brg_ids, id_param4')
					 ->from('tbl_operator')
					 ->where('id_operator', $listingID);
			$db = $this->db->get();
			$row = $db->row(0);
			$kode_brg_ids = $row->kode_brg_ids;
			$id_param4 = $row->id_param4;
			
			//GET THE STATES PER COUNTRY ID
			$this->db->select('*')
					 ->from('tbl_param4')
					 ->where('kode_brg_ids', $kode_brg_ids);
			$db = $this->db->get();
			
			//APPEND THE OPTION FIELDS WITH VALUES FROM THE STATES PER THE COUNTRY ID
			foreach($db->result() as $row):
				if($row->param4_id == $id_param4) {
					$empty_select .= '<option value="'.$row->param4_id.'" selected="selected">'.$row->param4.'</option>';
				} else {
					$empty_select .= '<option value="'.$row->param4_id.'">'.$row->param4.'</option>';
				}
			endforeach;
			
			//RETURN SELECTION COMBO
			return $empty_select.$empty_select_closed;
		} else {
			//RETURN SELECTION COMBO
			return $empty_select.$empty_select_closed;	
		}
	}
	
	
	//CALLBACK FUNCTIONS PARAMETER --------------------------------------------------------------
	function empty_desk_p1_dropdown_select()
	{
		//CREATE THE EMPTY SELECT STRING
		$empty_select = '<select name="desk_p1" class="chosen-select" data-placeholder="Select Param1" style="width: 300px; display: none;">';
		$empty_select_closed = '</select>';
		//GET THE ID OF THE LISTING USING URI
		$listingID = $this->uri->segment(4);
		
		//LOAD GCRUD AND GET THE STATE
		$crud = new grocery_CRUD();
		$desk_p1 = $crud->getState();
		
		//CHECK FOR A URI VALUE AND MAKE SURE ITS ON THE EDIT STATE
		if(isset($listingID) && $desk_p1 == "edit") {
			//GET THE STORED STATE ID
			$this->db->select('kode_brg_ids, desk_p1')
					 ->from('tbl_operator')
					 ->where('id_operator', $listingID);
			$db = $this->db->get();
			$row = $db->row(0);
			$kode_brg_ids = $row->kode_brg_ids;
			$desk_p1 = $row->desk_p1;
			
			//GET THE STATES PER COUNTRY ID
			$this->db->select('*')
					 ->from('tbl_param1')
					 ->where('kode_brg_ids', $kode_brg_ids);
			$db = $this->db->get();
			
			//APPEND THE OPTION FIELDS WITH VALUES FROM THE STATES PER THE COUNTRY ID
			foreach($db->result() as $row):
				if($row->param1_id == $id_param1) {
					$empty_select .= '<option value="'.$row->param1_id.'" selected="selected">'.$row->desk_p1.'</option>';
				} else {
					$empty_select .= '<option value="'.$row->param1_id.'">'.$row->desk_p1.'</option>';
				}
			endforeach;
			
			//RETURN SELECTION COMBO
			return $empty_select.$empty_select_closed;
		} else {
			//RETURN SELECTION COMBO
			return $empty_select.$empty_select_closed;	
		}
	}
	
	function empty_desk_p2_dropdown_select()
	{
		//CREATE THE EMPTY SELECT STRING
		$empty_select = '<select name="desk_p2" class="chosen-select" data-placeholder="Select Param1" style="width: 300px; display: none;">';
		$empty_select_closed = '</select>';
		//GET THE ID OF THE LISTING USING URI
		$listingID = $this->uri->segment(4);
		
		//LOAD GCRUD AND GET THE STATE
		$crud = new grocery_CRUD();
		$desk_p2 = $crud->getState();
		
		//CHECK FOR A URI VALUE AND MAKE SURE ITS ON THE EDIT STATE
		if(isset($listingID) && $desk_p2 == "edit") {
			//GET THE STORED STATE ID
			$this->db->select('kode_brg_ids, desk_p2')
					 ->from('tbl_operator')
					 ->where('id_operator', $listingID);
			$db = $this->db->get();
			$row = $db->row(0);
			$kode_brg_ids = $row->kode_brg_ids;
			$desk_p2 = $row->desk_p2;
			
			//GET THE STATES PER COUNTRY ID
			$this->db->select('*')
					 ->from('tbl_param2')
					 ->where('kode_brg_ids', $kode_brg_ids);
			$db = $this->db->get();
			
			//APPEND THE OPTION FIELDS WITH VALUES FROM THE STATES PER THE COUNTRY ID
			foreach($db->result() as $row):
				if($row->param2_id == $id_param2) {
					$empty_select .= '<option value="'.$row->param2_id.'" selected="selected">'.$row->desk_p2.'</option>';
				} else {
					$empty_select .= '<option value="'.$row->param2_id.'">'.$row->desk_p2.'</option>';
				}
			endforeach;
			
			//RETURN SELECTION COMBO
			return $empty_select.$empty_select_closed;
		} else {
			//RETURN SELECTION COMBO
			return $empty_select.$empty_select_closed;	
		}
	}
	
	function empty_desk_p3_dropdown_select()
	{
		//CREATE THE EMPTY SELECT STRING
		$empty_select = '<select name="desk_p3" class="chosen-select" data-placeholder="Select Param1" style="width: 300px; display: none;">';
		$empty_select_closed = '</select>';
		//GET THE ID OF THE LISTING USING URI
		$listingID = $this->uri->segment(4);
		
		//LOAD GCRUD AND GET THE STATE
		$crud = new grocery_CRUD();
		$desk_p3 = $crud->getState();
		
		//CHECK FOR A URI VALUE AND MAKE SURE ITS ON THE EDIT STATE
		if(isset($listingID) && $desk_p3 == "edit") {
			//GET THE STORED STATE ID
			$this->db->select('kode_brg_ids, desk_p3')
					 ->from('tbl_operator')
					 ->where('id_operator', $listingID);
			$db = $this->db->get();
			$row = $db->row(0);
			$kode_brg_ids = $row->kode_brg_ids;
			$desk_p3 = $row->desk_p3;
			
			//GET THE STATES PER COUNTRY ID
			$this->db->select('*')
					 ->from('tbl_param3')
					 ->where('kode_brg_ids', $kode_brg_ids);
			$db = $this->db->get();
			
			//APPEND THE OPTION FIELDS WITH VALUES FROM THE STATES PER THE COUNTRY ID
			foreach($db->result() as $row):
				if($row->param3_id == $id_param3) {
					$empty_select .= '<option value="'.$row->param3_id.'" selected="selected">'.$row->desk_p3.'</option>';
				} else {
					$empty_select .= '<option value="'.$row->param3_id.'">'.$row->desk_p3.'</option>';
				}
			endforeach;
			
			//RETURN SELECTION COMBO
			return $empty_select.$empty_select_closed;
		} else {
			//RETURN SELECTION COMBO
			return $empty_select.$empty_select_closed;	
		}
	}
	
	function empty_desk_p4_dropdown_select()
	{
		//CREATE THE EMPTY SELECT STRING
		$empty_select = '<select name="desk_p4" class="chosen-select" data-placeholder="Select Param1" style="width: 300px; display: none;">';
		$empty_select_closed = '</select>';
		//GET THE ID OF THE LISTING USING URI
		$listingID = $this->uri->segment(4);
		
		//LOAD GCRUD AND GET THE STATE
		$crud = new grocery_CRUD();
		$desk_p4 = $crud->getState();
		
		//CHECK FOR A URI VALUE AND MAKE SURE ITS ON THE EDIT STATE
		if(isset($listingID) && $desk_p4 == "edit") {
			//GET THE STORED STATE ID
			$this->db->select('kode_brg_ids, desk_p4')
					 ->from('tbl_operator')
					 ->where('id_operator', $listingID);
			$db = $this->db->get();
			$row = $db->row(0);
			$kode_brg_ids = $row->kode_brg_ids;
			$desk_p4 = $row->desk_p4;
			
			//GET THE STATES PER COUNTRY ID
			$this->db->select('*')
					 ->from('tbl_param4')
					 ->where('kode_brg_ids', $kode_brg_ids);
			$db = $this->db->get();
			
			//APPEND THE OPTION FIELDS WITH VALUES FROM THE STATES PER THE COUNTRY ID
			foreach($db->result() as $row):
				if($row->param4_id == $id_param4) {
					$empty_select .= '<option value="'.$row->param4_id.'" selected="selected">'.$row->desk_p4.'</option>';
				} else {
					$empty_select .= '<option value="'.$row->param4_id.'">'.$row->desk_p4.'</option>';
				}
			endforeach;
			
			//RETURN SELECTION COMBO
			return $empty_select.$empty_select_closed;
		} else {
			//RETURN SELECTION COMBO
			return $empty_select.$empty_select_closed;	
		}
	}
	
	


























	


	
	
	

	public function logout(){
	   $this->session->unset_userdata('logged_in');
	   session_destroy();
	   redirect('controllerAuthorized', 'refresh');
 	}
 
	function groceryOutput($output = null){
        $this->load->view('viewAuthorized.php',$output);    
    }
	
	function groceryOutputFrame($output = null){
        $this->load->view('viewOperator.php',$output);    
    }
	
	function groceryOutputGeneral($output = null){
        $this->load->view('viewGeneral.php',$output);    
    }

}

?>

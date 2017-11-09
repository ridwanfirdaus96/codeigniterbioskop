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
			$crud->set_table('film');
			$crud->set_subject('Data Film');
			$crud->unset_columns('kd_film');
			$crud->unset_columns('kd_studio');

				 			
				//DATA PENAMAAN ALIAS TABLE
		   	$crud->display_as('kd_film','Kode Film')
				 ->display_as('judul','Judul Film')
				 ->display_as('sinopsis','Sinopsis')
				 ->display_as('kategori','Kategori')
				 ->display_as('tgl','Tanggal Penyangan')
				 ->display_as('jam','Jam tayang')
				 ->display_as('nama_studio','Nama Studio')
				 ->display_as('kd_studio','Kode Studio');
			
			$crud->set_relation('nama_studio','studio','nama_studio')
				 ->set_relation('kd_studio','studio','kd_studio');
				 					 
			$crud->fields('kd_film','judul','sinopsis','kategori','tgl','jam','nama_studio','kd_studio') 
				 ->required_fields('nama_studio','kd_studio');
				 
		    $output = $crud->render();
		    $this->groceryOutput($output); 
			}//End if filter user
			else{
				//Jika bukan user admin
	     		redirect('controllerAuthorized/userPage', 'refresh');
			}
	   }
	   else{
	     //If no session, redirect to login page
	     redirect('controllerLogin', 'refresh');
	   }
	 }
	 
	 /*
	 public function dataKelas(){
	   if($this->session->userdata('logged_in')) {
	     $session_data = $this->session->userdata('logged_in');
		 	/*$data['username'] = $session_data['username'];
		     $this->load->view('viewAuthorized', $data);*/
			
			/* ## Filter user menggunakan username */
	/*	if($session_data['username']=='admin'){

		 	$crud = new grocery_CRUD();
			/*$crud->set_theme('datatables');*/
	/*		$crud->set_table('studio');
			$crud->set_subject('Data Studio');
			$crud->unset_columns('kd_studio');
			
$crud->set_field_upload('file_url','assets/uploads/files');
				 			
				//DATA PENAMAAN ALIAS TABLE
			   $crud->display_as('kd_studio','Kode Studio')
			   	  ->display_as('nama_studio','Nama Studio')
				 ->display_as('jml_kursi','Jumlah Kursi');
			
				 
			$crud->set_relation('nama_studio','film','nama_studio')
			->set_relation('kd_studio','film','kd_studio')
			->set_relation('nama_studio','kursi','nama_studio')
			->set_relation('kd_studio','kursi','kd_studio');
								 
			$crud->fields('kd_studio','nama_studio','jml_kursi');
				 
		    $output = $crud->render();
		    $this->groceryOutput($output); 
			}//End if filter user
			else{
				//Jika bukan user admin
	     		redirect('controllerAuthorized/userPage', 'refresh');
			}
	   }
	   else{
	     //If no session, redirect to login page
	     redirect('controllerLogin', 'refresh');
	   }
	 }
	
*/
	 public function datapegawai(){
	   if($this->session->userdata('logged_in')) {
	     $session_data = $this->session->userdata('logged_in');
		 	/*$data['username'] = $session_data['username'];
		     $this->load->view('viewAuthorized', $data);*/
			
			/* ## Filter user menggunakan username */
  	if($session_data['username']=='admin'){

		 	$crud = new grocery_CRUD();
			/*$crud->set_theme('datatables');*/
		$crud->set_table('pegawai');
			$crud->set_subject('Data Pegawai');
			$crud->unset_columns('id_pegawai');
				 			
				//DATA PENAMAAN ALIAS TABLE
		   	$crud->display_as('id_pegawai','ID Pegawai')
				 ->display_as('nama_pegawai','Nama Pegawai')
				 ->display_as('alamat','Alamat')
				 ->display_as('jenis_kelamin','Jenis Kelamin')
				 ->display_as('no_telp','Nomor Telepon')
				 ->display_as('email','Email');
								 
			$crud->fields('id_pegawai','nama_pegawai','alamat','jenis_kelamin','no_telp','email'); 
				 
				 
		    $output = $crud->render();
		    $this->groceryOutput($output); 
			}//End if filter user
			else{
				//Jika bukan user admin
	     		redirect('controllerAuthorized/userPage', 'refresh');
			}
	   }
	   else{
	     //If no session, redirect to login page
	     redirect('controllerLogin', 'refresh');
	   }
	 }
	 
	 
	 public function datastudio(){
	   if($this->session->userdata('logged_in')) {
	     $session_data = $this->session->userdata('logged_in');
		 	/*$data['username'] = $session_data['username'];
		     $this->load->view('viewAuthorized', $data);*/
			
			/* ## Filter user menggunakan username */
			if($session_data['username']=='admin'){

		 	$crud = new grocery_CRUD();
			/*$crud->set_theme('datatables');*/
			$crud->set_table('studio');
			$crud->set_subject('Data Studio');
			$crud->unset_columns('kd_studio');
				 			
				//DATA PENAMAAN ALIAS TABLE
			   $crud->display_as('kd_studio','Kode Studio')
			   ->display_as('nama_studio','Nama Studio')
		   ->display_as('jml_kursi','Jumlah Kursi');
		   
				
								
		   $crud->fields('kd_studio','nama_studio','jml_kursi');
		    $output = $crud->render();
		    $this->groceryOutput($output); 
			}//End if filter user
			else{
				//Jika bukan user admin
	     		redirect('controllerAuthorized/userPage', 'refresh');
			}
	   }
	   else{
	     //If no session, redirect to login page
	     redirect('controllerLogin', 'refresh');
	   }
	 }
	 
	 /*
	 public function dataFakultas(){
	   if($this->session->userdata('logged_in')) {
	     $session_data = $this->session->userdata('logged_in');
		 	/*$data['username'] = $session_data['username'];
		     $this->load->view('viewAuthorized', $data);*/
			
			/* ## Filter user menggunakan username */
/*			if($session_data['username']=='admin'){

		 	$crud = new grocery_CRUD();
			$crud->set_table('tbl_fakultas');
			$crud->set_subject('Data Fakultas');
			$crud->columns('id_fak','nama_fakultas');
				 			
				//DATA PENAMAAN ALIAS TABLE
		   	$crud->display_as('id_fak','Nomor')
				 ->display_as('nama_fakultas','Fakultas');
								 
			$crud->fields('nama_fakultas') 
				 ->required_fields('nama_fakultas');
				 
		    $output = $crud->render();
		    $this->groceryOutput($output); 
			}//End if filter user
			else{
		11		//Jika bukan user admin
	     		redirect('controllerAuthorized/userPage', 'refresh');
			}
	   }
	   else{
	     //If no session, redirect to login page
	     redirect('controllerLogin', 'refresh');
	   }
	 }
	 
*/	 
	 public function userPage(){
	   if($this->session->userdata('logged_in')) {
	     $session_data = $this->session->userdata('logged_in');
		 	/*$data['username'] = $session_data['username'];
		     $this->load->view('viewAuthorized', $data);*/
			
			/* ## Filter user menggunakan username */
			if($session_data['username']=='user'){

		 	$crud = new grocery_CRUD();
			/*$crud->set_theme('datatables');*/
			$crud->set_table('film');
			$crud->set_subject('Data FILM');
			$crud->unset_columns('kd_film');
			$crud->unset_add();
			$crud->unset_edit();
			$crud->unset_delete();
			$crud->unset_print();
			$crud->unset_export();
			$crud->set_field_upload('file_url','assets/uploads/files');
				 			
				//DATA PENAMAAN ALIAS TABLE
				$crud->display_as('kd_film','Kode Film')
				->display_as('judul','Judul Film')
				->display_as('sinopsis','Sinopsis')
				->display_as('kategori','Kategori')
				->display_as('tgl','Tanggal Lahir')
				->display_as('jam','Jam tayang')
				->display_as('nama_studio','Nama Studio')
				->display_as('kd_studio','Kode Studio');
		   
		   $crud->set_relation('nama_studio','studio','nama_studio')
				->set_relation('kd_studio','studio','kd_studio');
									 
		   $crud->fields('kd_film','judul','sinopsis','kategori','tgl','jam','nama_studio','kd_studio') 
				->required_fields('nama_studio','kd_studio');
		   
			/*	$crud->display_as('nama_mhs','Nama')
				 ->display_as('nim_mhs','NIM')
				 ->display_as('tempat_lahir','Tempat Lahir')
				 ->display_as('tanggal_lahir','Tanggal Lahir')
				 ->display_as('alamat_asal','Alamat Asal')
				 ->display_as('alamat_sekarang','Alamat Sekarang')
				 ->display_as('telp','Telp/HP')
				 ->display_as('email','Email')
				 ->display_as('kelas_mhs','Kelas')
				 ->display_as('dosen_wali','Dosen Wali')
				 ->display_as('jurusan','Jurusan')
				 ->display_as('fakultas','Fakultas');
			
			$crud->set_relation('kelas_mhs','tbl_kelas','nama_kelas')
				 ->set_relation('dosen_wali','tbl_dosen','nama_dosen')
				 ->set_relation('jurusan','tbl_jurusan','{nama_jur} -- {tingkatan}')
				 ->set_relation('fakultas','tbl_fakultas','nama_fakultas');
				 					 
			$crud->fields('nama_mhs','nim_mhs','tempat_lahir','tanggal_lahir','alamat_asal','alamat_sekarang',
						  'telp','email','dosen_wali','kelas_mhs','jurusan','fakultas') 
				 ->required_fields('fakultas','jurusan','dosen_wali','kelas_mhs','nama_mhs');*/
				 
		    $output = $crud->render();
		    $this->groceryOutputUser($output); 
			}//End if filter user
			else{
				//Jika bukan user admin
	     		redirect('controllerAuthorized/noPrivilege', 'refresh');
			}
	   }
	   else{
	     //If no session, redirect to login page
	     redirect('controllerLogin', 'refresh');
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
	
	function groceryOutputUser($output = null){
        $this->load->view('viewUser.php',$output);    
    }
}

?>

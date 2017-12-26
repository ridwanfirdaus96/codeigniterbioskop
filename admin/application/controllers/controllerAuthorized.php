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
			$crud->unset_columns('kd_film','kd_kategori');
			


				 			
				//DATA PENAMAAN ALIAS TABLE
		   	$crud->display_as('kd_film','Kode Film')
			     ->display_as('gambar','Gambar')
				 ->display_as('judul','Judul Film')
				 ->display_as('sinopsis','Sinopsis')
				 ->display_as('kd_kategori','Kategori')
				 ->display_as('director','Direktor')
				 ->display_as('aktor','Aktor')
				 ->display_as('durasi','Durasi')
				 ->display_as('rating_sensor','Rating Sensor')
				 ->display_as('bahasa','Bahasa')
				 ->display_as('subtitle','Subtitle');
				 
				 $crud->set_field_upload('gambar','assets/uploads/files');
				  
				
			$crud->set_relation('kd_kategori','kategori','{jenis_k}');
			
			$crud->fields('kd_film','gambar','judul','sinopsis','kd_kategori','director','aktor','durasi','rating_sensor','bahasa','subtitle') 
			->required_fields('kd_kategori','kd_film');	 

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
	 
	 public function datajadwal(){
		if($this->session->userdata('logged_in')) {
		  $session_data = $this->session->userdata('logged_in');
			  /*$data['username'] = $session_data['username'];
			  $this->load->view('viewAuthorized', $data);*/
			 
			 /* ## Filter user menggunakan username */
	   if($session_data['username']=='admin'){
 
			  $crud = new grocery_CRUD();
			 /*$crud->set_theme('datatables');*/
		 $crud->set_table('jadwal','film','studio');
			 $crud->set_subject('Data Jadwal');
			 $crud->unset_columns('id_jadwal','kd_studio','kd_film');
							  
				 //DATA PENAMAAN ALIAS TABLE
				$crud->display_as('id_jadwal','ID Jadwal')
				  ->display_as('kd_film','Film')
				  ->display_as('tgl_tayang','Tanggal Mulai')
				  ->display_as('tgl_berakhir','Tanggal Terakhir')
				  ->display_as('jam_tayang','Jam Tayang')
				  ->display_as('kd_studio','Nama Studio');
								  

				  $crud->set_relation('kd_studio','studio','{nama_studio}')
				  ->set_relation('kd_film','film','{judul}');

			 $crud->fields('id_jadwal','kd_film','tgl_tayang','tgl_berakhir','jam_tayang','kd_studio')
			 ->required_fields('id_jadwal','kd_studio','kd_film');
		
		/*	$this->db->select('jadwal.id_jadwal,jadwal.tgl_tayang,
			jadwal.tgl_berakhir,jadwal.jam_tayang,film.judul,studio.nama_studio')
			->join('studio','studio.kd_studio=jadwal.kd_studio')
			->join('film','film.kd_film=jadwal.kd_film');
			return $this->db->get('jadwal')->result();
		*/				 
				  
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
	  
	  
	 public function datapemesan(){
		if($this->session->userdata('logged_in')) {
		  $session_data = $this->session->userdata('logged_in');
			  /*$data['username'] = $session_data['username'];
			  $this->load->view('viewAuthorized', $data);*/
			 
			 /* ## Filter user menggunakan username */
	   if($session_data['username']=='admin'){
 
			  $crud = new grocery_CRUD();
			 /*$crud->set_theme('datatables');*/
		 $crud->set_table('pemesan','memesan','tiket');
			 $crud->set_subject('Data Pemesan');
			 $crud->unset_columns('id_pemesan','id_pegawai','id_tiket','kd_film','kd_studio','id_jadwal');
							  
				 //DATA PENAMAAN ALIAS TABLE
				$crud->display_as('id_pemesan','ID Pemesan')
				->display_as('id_pegawai','ID Pegawai')
				->display_as('id_tiket','ID Tiket')
				->display_as('kd_studio','Kode Studio')
				->display_as('id_jadwal','ID Jadwal')
				->display_as('kd_film','Kode  Film')
				  ->display_as('nama_pemesan','Nama Pemesam')
				  ->display_as('alamat','Alamat')
				  ->display_as('jenis_kelamin','Jenis Kelamin')
				  ->display_as('no_telp','Nomor Telepon')
				  ->display_as('email','Email')
				  ->display_as('tgl_transaksi','Tanggal Transaksi')
				  ->display_as('jam_transaksi','Jam Transaksi')
				  ->display_as('judul','Judul Film')
				  ->display_as('kursi','Kursi')
				  ->display_as('nama_studio','Nama Studio')
				  ->display_as('jml_tiket','Jumlah Tiket')
				  ->display_as('total','Total');
								  

				
				  $crud->set_relation('id_pemesan','memesan','{id_pemesan--total}')
				  ->set_relation('id_pegawai','memesan','{id_pegawai--total}');
			 $crud->fields('id_pemesan','id_pegawai','id_tiket','kd_studio','id_jadwal','kd_film','nama_pemesan','alamat','jenis_kelamin','no_telp','email','tgl_transaksi','jam_transaksi','judul','kursi','nama_studio','jml_tiket','total')
			 ->required_fields('id_pemesan','id_pegawai','id_tiket','kd_studio','id_jadwal','kd_film');
				  
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
	 
	 public function datakategori(){
		if($this->session->userdata('logged_in')) {
		  $session_data = $this->session->userdata('logged_in');
			  /*$data['username'] = $session_data['username'];
			  $this->load->view('viewAuthorized', $data);*/
			 
			 /* ## Filter user menggunakan username */
			 if($session_data['username']=='admin'){
 
			  $crud = new grocery_CRUD();
			 /*$crud->set_theme('datatables');*/
			 $crud->set_table('kategori');
			 $crud->set_subject('Data Kategori');
			 $crud->unset_columns('kd_kategori');
							  
				 //DATA PENAMAAN ALIAS TABLE
				$crud->display_as('kd_kategori','Kode Kategori')
				->display_as('jenis_k','Jenis Kategori');

			
				 
								 
			$crud->fields('kd_kategori','jenis_k');
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
		   ->display_as('kursi','Kursi');
		   
				
								
		   $crud->fields('kd_studio','nama_studio','kursi');
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
				
				//DATA PENAMAAN ALIAS TABLE
				$crud->set_table('film');
				$crud->set_subject('Data Film');
				$crud->unset_columns('kd_film','kd_kategori');
	
	
		$crud->unset_add();
			$crud->unset_edit();
			$crud->unset_delete();
			$crud->unset_print();
			$crud->unset_export();
		
								 
					//DATA PENAMAAN ALIAS TABLE
		   	$crud->display_as('kd_film','Kode Film')
			   ->display_as('gambar','Gambar')
			   ->display_as('judul','Judul Film')
			   ->display_as('sinopsis','Sinopsis')
			   ->display_as('kd_kategori','Kategori')
			   ->display_as('director','Direktor')
			   ->display_as('aktor','Aktor')
			   ->display_as('durasi','Durasi')
			   ->display_as('rating_sensor','Rating Sensor')
			   ->display_as('bahasa','Bahasa')
			   ->display_as('subtitle','Subtitle');
			   
			   $crud->set_field_upload('gambar','assets/uploads/files');
				
			  
		  $crud->set_relation('kd_kategori','kategori','jenis_k');
		  
		  $crud->fields('kd_film','gambar','judul','sinopsis','kd_kategori','director','aktor','durasi','rating_sensor','bahasa','subtitle') 
		  ->required_fields('kd_kategori','jenis_k');	 
					 
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

<?php 
class home extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
		$this->load->helper(array('url','form'));
		echo validation_errors();
	}

	public function index()
	{
		$data['film'] = $this->home_model->get_film();
		$data['pemesan'] = $this->home_model->get_pemesan();
		$data['judul'] = 'news archive';

		$this->load->view('templates/header', $data);
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer');
	}

	public function see()
	{
		$data['film'] = $this->home_model->get_film();
		$data['pemesan'] = $this->home_model->get_pemesan();
		$data['kursi'] = $this->home_model->get_kursi();
		$data['judul'] = 'news archive';

		$this->load->view('templates/header', $data);
		$this->load->view('home/see', $data);
		$this->load->view('templates/footer');
	}
	
	
	public function ticket()
	{
		$this->load->helper('form','url');
		$this->load->library('form_validation');
	
		$data = array(
			'nama_pemesan' => 'firman',
			'alamat'       => 'jl.tubagus',
			'jenis_kelamin'=> 'L',
			'no_telp'      => '08112230300',
			'email'        => 'the_randas@rocketmail.com'


		);
	
		$this->form_validation->set_rules('nama_pemesan', 'nama_pemesan', 'required');
		$this->form_validation->set_rules('alamat', 'alamat', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required');
		$this->form_validation->set_rules('no_telp', 'no_telp', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
	
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('home/ticket');
			$this->load->view('templates/footer');
	
		}
		else
		{
			$this->home_model->set_ticket();
			$this->load->view('templates/header', $data);
			$this->load->view('home/movies');
			$this->load->view('templates/footer');
		}
	}

	public function movies()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data = array (
			'judul'       => 'Wrath of Dragon',
			'tgl'         => '2017-10-24',
			'jam'         => '18:24:32',
			'kd_studio'   => '1',
			'nama_studio' => 'starplex'

		);

		$this->form_validation->set_rules('judul','judul','required');
		$this->form_validation->set_rules('tgl','tgl','required');
		$this->form_validation->set_rules('jam','jam','required');
		$this->form_validation->set_rules('kd_studio','kd_studio','required');
		$this->form_validation->set_rules('nama_studio','nama_studio','required');

		if ($this->form_validation->run() === FALSE)
		{
			
			$this->load->view('templates/header', $data);
			$this->load->view('home/movies');
			$this->load->view('templates/footer');
		}
		else{
			$this->home_model->set_movies();
			$this->load->view('templates/header');
			$this->load->view('home/kursi');
			$this->load->view('templates/footer');
		}
    
	}

	public function kursi()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['baris'] = '1';

		$this->form_validation->set_rules('baris','baris','required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('home/kursi');
			$this->load->view('templates/footer');
		}
		else
		{
			$this->home_model->set_kursi();
			$this->load->view('templates/header');
			$this->load->view('home/success');
			$this->load->view('templates/footer');
		}

	}

	public function kursi2()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['baris'] ='2D';

		$this->form_validation->set_rules('baris','baris','required');

		if ($this->form_validation->run() === FALSE)
		{
			
			$this->load->view('templates/header', $data);
			$this->load->view('home/kursi2');
			$this->load->view('templates/footer');
		}
		else{
			$this->home_model->set_kursi2();
			$this->load->view('home/success');
		}
	}

	public function success()
	{
		$data['film'] = $this->home_model->get_film();
		$data['judul'] = 'News archive';

		$this->load->view('templates/header', $data);
		$this->load->view('home/success', $data);
		$this->load->view('templates/footer');
	}
	
	public function admin()
	{
		$this->load->view('home/admin');
	}

	public function mv01()
	{
		

		$this->load->view('templates/header');
		$this->load->view('home/mv01');
		$this->load->view('templates/footer');
	}

	public function mv02()
	{
		$this->load->view('templates/header');
		$this->load->view('home/mv02');
		$this->load->view('templates/footer');
	}

	public function mv03()
	{
		$this->load->view('templates/header');
		$this->load->view('home/mv03');
		$this->load->view('templates/footer');
	}

	public function mv04()
	{
		$this->load->view('templates/header');
		$this->load->view('home/mv04');
		$this->load->view('templates/footer');
	}

	public function informasi()
	{
		$data['informasi'] = $this->home_model->get_informasi();
		$data = array(
			'judul' => 'Geostorm',
			'director' => 'general',
			'durasi' => '120 minutes',
			'genre' => 'horror',
			'language' => 'indonesia',
			'sinopsis' => 'cerita ini'
		);

		$this->load->view('templates/header', $data);
		
	}


	public function views($judul = NULL)
	{
		
		$data ['film_item'] = $this->home_model->get_film($judul);
	

		if (empty($data['film_item']))
		{
			show_404();
		}

	
		$data['film item'] = $data['film_item']['judul'];

		$this->load->view('templates/header', $data);
		$this->load->view('home/views', $data);
		$this->load->view('templates/footer');
	}
	public function upload_form()
	{
		    $this->load->view('templates/header');
			$this->load->view('home/upload_form', array('error' => ' ' ));
			$this->load->view('templates/footer');
									
	}

	public function do_upload()
	
		
	{
			$config['upload_path']          = './uploads/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 1000;
			$config['max_width']            = 1024;
			$config['max_height']           = 768;

			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if ( ! $this->upload->do_upload('userfile'))
			{
					$error = array('error' => $this->upload->display_errors());
								
                    $this->load->view('templates/header');
					$this->load->view('home/upload_form', $error);
					$this->load->view('templates/footer');

			}
			else
			{
					$data = array('upload_data' => $this->upload->data());
                    $this->load->view('templates/header');
					$this->load->view('home/upload_success', $data);
					$this->load->view('templates/footer');
			}
		}

		}
	


public function create()
{
	 $this->load->helper('form');
	 $this->load->library('form_validation');

	 $data['judul'] = 'create a post item ';

	 $data->form_validation->set_rules('judul','judul', 'required');
	 $this->form_validation->set_rules('isi', 'isi', 'required');

	 if ($this->form_validation->run() === FALSE)
	 {
		 $this->load->view('template/header', $data);
		 $this->load->view('home/create');
		 $this->load->view('templates/footer');
	 }
	 else{
		 $this->home_->set_post();
		 $this->load->view('home/success');
	 }
}

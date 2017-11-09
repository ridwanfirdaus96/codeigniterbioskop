<?php
  class news extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
		$this->load->helper('form');
		echo validation_errors();
	}

	public function index()
	{
		$data['news'] = $this->news_model->get_news();
		$data['title'] = 'News Archive';

		$this->load->view('template/header', $data);
		$this->load->view('news/index', $data);
		$this->load->view('template/footer');
	}

	public function view($slug = NULL)
	{
		$data['news_item'] = $this->news_model->get_news();

		
				$data['news_item'] = $this->news_model->get_news($slug);
		
				if (empty($data['news_item']))
				{
						show_404();
				}
		
				$data['title'] = $data['news_item']['title'];
		
				$this->load->view('template/header', $data);
				$this->load->view('news/view', $data);
				$this->load->view('template/footer');
		
	}

	public function create()
	{
		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		
		
	
		$data['title'] = 'Create a news item';
	
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('text', 'Text', 'required');
	
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('template/header', $data);
			$this->load->view('news/create');
			$this->load->view('template/footer');
	
		}
		else
		{
			$this->news_model->set_news();
			$this->load->view('news/success');
		}
	}

  }
